<?php
public function napTheCao() {
		$data = array();
		$data['has'] = false;
		if(@$_POST['loaithe'] && @$_POST['seri'] && @$_POST['pwd'] && @$_POST['captcha']) {
			$loaithe = $_POST['loaithe'];
			$seri = $_POST['seri'];
			$pwd = $_POST['pwd'];
			$captcha = $_POST['captcha'];
			$allThe = array('VIETEL', 'MOBI', 'VINA', 'GATE');
			if(!in_array($loaithe, $allThe)) {
				$data['message'] = 'Loại thẻ không tồn tại';
			} else {
				$cf['url'] = $this->settings->nap_ngay_url;
				$cf['postVar'] = "UserCardForm%5Btype_card%5D=" . $loaithe . "&UserCardForm%5Bpin%5D=" . $pwd . "&UserCardForm%5Bseri%5D=" . $seri . "&UserCardForm%5Bcaptcha%5D=".$captcha;
				$cf['cookie'] = $this->session->userdata('username').".txt";
				$this->curl->init($cf);
				$page = $this->curl->get();
				//$page = file_get_contents('http://localhost/lode/test/napthe-success.txt');
				if(!inStr($page, 'UserCardForm_pin_em_')) {
					$data['message'] = 'Hệ thống đang bảo trì. Vui lòng liên hệ quản trị';
				} else {
					if(inStr($page, 'id="UserCardForm_pin_em_">')) {
						$data['message'] = 'Mã thẻ không hợp lệ';

					} elseif(inStr($page, 'id="UserCardForm_seri_em_">')) {
						$data['message'] = 'Seri không hợp lệ';
					} elseif(inStr($page, 'id="UserCardForm_captcha_em_">')) {
						$data['message'] = 'Captcha không chính xác';
					} elseif(inStr($page, 'alert-error')) {
						$data['message'] = get3Str('data-dismiss="alert">', '</a>', '</', $page);
					} elseif(inStr($page, 'alert-success')) {
						$respond = get2Str('data-dismiss="alert">', '</div>', $page);
						$respond = strip_tags($respond);
						preg_match('!\d+!', $respond, $matches);
						if(!@$matches[0]) {
							$data['message'] = 'Lỗi hệ thống (code: 001)';
							log_message('error', 'CODE: 001: Lỗi khi nạp thẻ. Không thể lấy số tiền đã nạp. Response: ' . $respond . '. Mệnh Giá:'. $matches[0]);
						} elseif(is_numeric($matches[0])) {
							if($matches[0] >= 10000 && $matches[0] <= 500000) {
								$chietKhau = $this->settings->ck_thecao;
								$currentCoin = $this->m_account->getCurrentCoin();
								$newCoin = ceil($matches[0] / 1000);
								$newCoin = $newCoin * $chietKhau / 100;
								$newCoin1 = $newCoin;
								$newCoin += $currentCoin;
								$tranTmp = array(
									'Loại Thẻ'	=>	$loaithe,
									'Mã Thẻ'	=>	$pwd,
									'Seri'		=>	$seri
									);
								$tranData['total'] = $newCoin1;
								$tranData['type'] = 1;
								$tranData['status'] = 1;
								$tranData['method'] = 2;
								$tranData['trandate'] = time();
								$check1 = $this->m_banking->addTransaction($tranData, $tranTmp);
								$check = $this->m_account->updateCoin($newCoin);
								if($check && $check1) {
									$data['has'] = true;
									$data['message'] = 'Nạp thẻ mệnh giá <strong>'.$matches[0].'</strong> VND. Bạn hiện có <strong>'.$newCoin.'</strong> coin';
									$data['newCoin'] = $newCoin;

								} else {
									$data['message'] = 'Lỗi khi cập nhật tài khoản của bạn. Vui lòng liên hệ bộ phận hỗ trợ';
								}
							} else {
								$data['message'] = 'Không lấy được mệnh giá thẻ. Vui lòng báo lỗi cho quản trị viên (code: 003)';
								log_message('error', 'CODE: 003: Lỗi khi nạp thẻ. Mệnh giá thẻ không đúng. Mệnh giá: ' . $matches[0]);
							}

						} else {
							$data['message'] = 'Lỗi hệ thống (code: 002)';
							log_message('error', 'CODE: 002: Lỗi khi nạp thẻ. Số tiền nạp không phải là số. Response: ' . $respond);
						}

					}
				}
				//echo $data['message'];
				//die($page);
				//$data['message'] = $page;
			}
			if($data['has'] == false) {
				log_message('info', 'User: ' . $this->session->userdata('username') . ': Mã thẻ: ' . $pwd);
			}
		} else {
			$data['message'] = 'Bạn chưa nhập đủ thông tin';
		}

		echo json_encode($data);

	}