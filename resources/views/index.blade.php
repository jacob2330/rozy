<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Rozy.</title>
	<link href="assets/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/index.css">
	<link rel="stylesheet" href="assets/css/slide.min.css">
	<link rel="stylesheet" href="assets/css/slide.theme.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.structure.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.theme.min.css">
	<script src="assets/js/axios.js"></script>
	<script src="assets/js/socket.io.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<script src="../../../assets/js/axios.js"></script>
    <script src="https://unpkg.com/peerjs@1.0.0/dist/peerjs.min.js"></script>
</head>
<body>
	<div class="rozy">
		@if(isset($messages) && $user && $messages->mySellers($user->getInfo()->id)->count()>0)
		<div class="inbox" id="notactive">
			<p class="intitle"><i class="far fa-comment-alt"></i> Trò Chuyện
				<div class="boxchat">
					<div class="listuser">
						<div class="toptool" style="border-radius:10px 0 0 0;color:white">
							Danh Sách
						</div>
						<ul id="sellerlist">
							
							@php
							$MsgSellers = $messages->mySellers($user->getInfo()->id);
							
							@endphp
							@foreach ($MsgSellers as $slr)
							<li @if($slr==$MsgSellers->first()) class="active" @endif 
							data-name="{{$slr->Seller->name}}"
							data-user="{{$slr->Seller->user_id}}"
							data-seller="{{$slr->Seller->id}}" data-user="{{$slr->Seller->user_id}}" 
							data-avatar="{{url($slr->Seller->Avatar->src ?? '')}}">
							{{$slr->Seller->name}}</li>
							@endforeach
							
						</ul>
					</div>
					
					<div class="preboxchat">
						<div class="toptool"><span class="centername">SHOP: {{$MsgSellers->first()->Seller->name}}</span> <button
								class="closechat">×</button></div>
						<div class="chatlist">
							<div class="scrolllog">
								<ul id="chatlog" data-current="{{$MsgSellers->first()->Seller->user_id}}">
									@foreach ($messages->getMessagesBySeller($user->getInfo()->id,$MsgSellers->first()->Seller->id) as $msg)
										@if($msg->position==1) 
										<li class="right">
											<p class="msgcontent">{{$msg->msg}}</p>
										</li>
										@else
										<li class="left">
											<img src="{{url($MsgSellers->first()->Seller->Avatar->src ?? '')}}" alt="" class="avtsend">
											<p class="msgcontent">{{$msg->msg}}</p>
										</li>
										@endif
									@endforeach
								</ul>
							</div>
						</div>
						<div class="send">
							<input id="msgTxt" onkeypress="CheckEnter(event)" type="text" placeholder="Nhập tin nhắn">
							<button id="sendMsg"><i class="far fa-paper-plane"></i></button>
						</div>
					</div>
				</div>
			</p>

		</div>
		<script>
			function CheckEnter(e){
				if(e.keyCode==13) SendNow()
			}
			function SendNow(){
				txtInp = document.querySelector('#msgTxt')
				if(txtInp.value!=''){
					let to =document.querySelector('#chatlog').dataset.current
					SendMessage(txtInp.value,{{$user->id}},to)
					html = `<li class="right">
								<p class="msgcontent">${document.querySelector('#msgTxt').value}</p>
							</li>`
					txtInp.value = ''
					document.querySelector('#chatlog').innerHTML = document.querySelector('#chatlog').innerHTML+html
					$(".chatlist").animate({ scrollTop: $('.scrolllog').height() }, 1000);
				}
			}
			document.querySelector('#sendMsg').onclick = SendNow
			document.querySelectorAll('#sellerlist li').forEach(v=>{
				v.onclick = (e)=>{
					document.querySelectorAll('#sellerlist li').forEach(x=>{
							x.classList.remove('active')
					})
					v.classList.add('active')
					axios.post('{{url()->route('getMsgBySeller')}}',{
						idsell:v.dataset.seller
					}).then(d=>{
						data = d.data
						document.querySelector('.toptool .centername').innerHTML='SHOP: '+v.dataset.name
						document.querySelector('#chatlog').setAttribute('data-current',v.dataset.user)
						msg = data.data
						html = ''
						for(let m of msg){
							if(m.position==1) html += `<li class="right">
											<p class="msgcontent">${m.msg}</p>
										</li>`;
							else html += `<li class="left">
											<img src="${v.dataset.avatar}" alt="" class="avtsend">
											<p class="msgcontent">${m.msg}</p>
										</li>`
						}
						document.querySelector('#chatlog').innerHTML = html
						$(".chatlist").animate({ scrollTop: $('.scrolllog').height() }, 300);
					})
				}
			})
			$(document).ready(()=>{
				$('.inbox p.intitle').click(() => {
					$('.inbox').attr('id', 'active')
					$('.boxchat').css('display', 'flex')
					$(".chatlist").animate({ scrollTop: $('.scrolllog').height() }, 1000);
				})
				$('.closechat').click(() => {
				
					$('.boxchat').hide()
					$('.inbox').attr('id', 'notactive')
				})
			})
		</script>
		@endif
		<!-- header -->
		@if ($user && $streams->count()>0)
			<div class="popupStream">
				<div class="boxStreamVideo">
					<video src="" id="popup_video"></video>
				</div>
			</div>
		@endif
		<div class="header">
			<div class="bannertop">
				<button class="view-banner-top"><a href="ads/event1.html" target="__blank">Xem chi tiết</a></button>
				<i class="far fa-times-circle close-banner-top"></i>
			</div>
			<div class="topinfo">
				<span style="margin-left:18%"><i class="fas fa-map-marker-alt"></i> 123 Nam Ky Khoi Nghia, Da Nang</span>
				<span style="margin-left:300px"><i class="fas fa-phone"></i> +84 766 730 945 | Support: 0236 456 789 |
					Sales: 0236 456 710</span>
			</div>
			<!-- boxtop -->
			<div class="boxtop">
				<!-- boxtopmain -->
				<div class="boxtopmain">
					<div class="centerboxtop">
						<div class="logo">
							<i class="fas fa-cart-arrow-down"></i>
							<a href="index.html" style="color:white"><span class="logoname"> Rozy.</span></a>
						</div>
						<div class="mobilelogo"><i class="fas fa-bars"></i>
							<ul>
								<div class="logo">
									<i class="fas fa-cart-arrow-down"></i>
									<span class="logoname"> Rozy.</span>
								</div>
								<li style="border-bottom:0.2px solid rgba(51, 51, 51, 0.3);padding-left:10px"><a
										href="#viewallcats" style="font-size: 1em;line-height: 45px"><i class="fas fa-home"
											style="font-size:1.2em;margin-right:5px;width:25px"></i> Trang chủ </a></li>
								<li style="border-bottom:0.2px solid rgba(51, 51, 51, 0.3);padding-left:10px;"><a
										href="#viewallcats" style="font-size: 1em;line-height: 45px"><i class="fas fa-user-circle"
											style="font-size:1.2em;margin-right:5px;width:25px"></i> Tài khoản</a></li>
								<li style="border-bottom:0.2px solid rgba(51, 51, 51, 0.3);padding-left:10px"><a
										href="#viewallcats" style="font-size: 1em;line-height: 45px"><i class="fas fa-bell"
											style="font-size:1.2em;margin-right:5px;width:25px"></i> Thông báo</a></li>
								<li style="border-bottom:0.2px solid rgba(51, 51, 51, 0.3);padding-left:10px"><a
										href="#viewallcats" style="font-size: 1em;line-height: 45px"><i class="fas fa-globe"
											style="font-size:1.2em;margin-right:5px;width:25px"></i> Tất cả danh mục </a></li>
								<li style="border-bottom:0.2px solid rgba(51, 51, 51, 0.3);padding-left:10px"><a
										href="#viewallcats" style="font-size: 1em;line-height: 45px"><i
											class="fas fa-calendar-week" style="font-size:1.2em;margin-right:5px;width:25px"></i>
										Sự kiện</a></li>
								<li style="border-bottom:0.2px solid rgba(51, 51, 51, 0.3);padding-left:10px"><a
										href="#viewallcats" style="font-size: 1em;line-height: 45px"><i class="fas fa-rss"
											style="font-size:1.2em;margin-right:5px;width:25px"></i> Tin tức</a></li>
								<li style="margin-top: 10px;"><span class="htext">KHUYẾN MÃI</span></li>
								<li><a href="#viewoptionfooter">Hot Deal</a></li>
								<li><a href="#viewoptionfooter">Giảm giá</a></li>
								<li><a href="#viewoptionfooter">Phiếu quà tặng</a></li>
								<li><a href="#viewoptionfooter">Tích lũy điểm</a></li>
								<li style="margin-top: 10px;"><span class="htext">LIÊN HỆ</span></li>
								<li><a href="#chatnow">Hỗ trợ trực tuyến</a></li>
								<li><a href="#viewoptionfooter">tuyển dụng</a></li>
								<li><a href="#viewoptionfooter">chính sách bảo mật</a></li>
								<li><a href="#viewoptionfooter">Điều khoản sử dụng</a></li>
								<li><a href="#viewoptionfooter">cam kết</a></li>
							</ul>
						</div>
						<!-- boxsearch -->
						<div class="boxsearch">
							<form action="{{url('/search')}}">
								<input autocomplete="off" name="keyword" placeholder="Nhập từ khóa sản phẩm..." type="search"
									class="searchinput">
								<button onclick="" class="searchnow micnow"><span><i
											class="fas fa-microphone"></i></span></button>
								<select name="cat" type="text" id="category_select">
									<option value="0" selected=selected>Tất cả danh mục</option>
									@foreach ($categories as $category)
									<option value="{{$category->id}}">{{$category->name}}</option>
									@endforeach
								</select>
								<button class="searchnow"><span><i class="fas fa-search"></i><span id="search_none">Tìm
											kiếm</span></span></button>
								<div class="boxmic">
									<p><span id="gifload"><i class="fas fa-spinner"></i></span>
										<span id="micicon"><i class="fas fa-microphone-alt"></i><span>Hãy Nói Từ Khóa Cần Tìm
											</span></span>
									</p>
								</div>
							</form>
							<div class="ideaforsearch">
								<p class="ideatitle">
									Gợi Ý Cho Bạn:
								</p>
								
								@if($recommandProducts->count()>11)
								<ul id="idealist">
									@for ($i = count($recommandProducts)-1; $i >= count($recommandProducts)-11 ; $i--)
									<li><a href="{{url()->route('myProduct',['slug'=>$recommandProducts[$i]['slug']])}}"><img src="{{url($recommandProducts[$i]->ImgAvt->src??'')}}"><span>{{$recommandProducts[$i]->name}}</span></a>
									</li>
									@endfor
									
								</ul>
								@endif
								<p class="ideatitle">
									Từ Khóa Hot:
								</p>
								<ul id="hotkeyidea">
									@foreach ($mostedKeyword[0] as $index => $key)
									<li><a href="{{url()->route('filter',['keyword'=>urlencode($key['keyword'])])}}">{{$key['keyword']}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="mobliecart"><i class="fas fa-shopping-cart"></i>
							<ul>
								<span class="yourcart">Sản phẩm bạn đã chọn (4) :</span>
								<li>
									<img src="assets/img/product1.png" alt="" class="cartimg">
									<span class="cartname"><a href="#">Galaxy S6 32Gb 3Gb Ram abc xyz </a></span>
									<span class="cartinfo">
										<span class="cartcost">10,000,000 <sup>VND</sup></span> x
										<span class="quantity">1</span>
									</span>
									<span class="closecart">×</span>
								</li>
								<li>
									<img src="assets/img/mega6.jpg" alt="" class="cartimg">
									<span class="cartname"><a href="#">Iphone X 64 GB Ram 4Gb</a></span>
									<span class="cartinfo">
										<span class="cartcost">20,000,000 <sup>VND</sup></span> x
										<span class="quantity">1</span>
									</span>
									<span class="closecart">×</span>
								</li>

								<li>
									<img src="assets/img/product1.png" alt="" class="cartimg">
									<span class="cartname"><a href="#">Galaxy S6 32Gb 3Gb Ram abc xyz </a></span>
									<span class="cartinfo">
										<span class="cartcost">10,000,000 <sup>VND</sup></span> x
										<span class="quantity">1</span>
									</span>
									<span class="closecart">×</span>
								</li>
								<li>
									<img src="assets/img/mega6.jpg" alt="" class="cartimg">
									<span class="cartname"><a href="#">Iphone X 64 GB Ram 4Gb</a></span>
									<span class="cartinfo">
										<span class="cartcost">20,000,000 <sup>VND</sup></span> x
										<span class="quantity">1</span>
									</span>
									<span class="closecart">×</span>
								</li>
								<li class="carttotal">
									<span> Tổng cộng: 30,000,000 <sup>VND</sup></span>
								</li>

								<div class="groupcartbtn">
									<button class="btnviewcart"><a href="{{url('/cart')}}">Xem giỏ hàng</a></button>
									<button class="btncartpay"><a href="{{url('/payment')}}">Thanh toán ngay</a></button>
								</div>
							</ul>
						</div>
						<!-- endboxsearch -->
						<!-- rightoption  -->
						<div class="sales">
							<li class="saleoption">
								<i class="fab fa-hotjar"></i>
								Khuyến mãi <sup id="salepercent">-5%</sup>
							</li>
						</div>

						@if ($user)
						<div class="rightoptions">
							<li class="roption">
								<i class="fas fa-user-alt"></i>
								<span class="uptitle">{{$user->getName() ?? ''}}</span>

								<span class="downtitle">Tài khoản</span>
								<ul>
									<li onclick="window.location.href='{{url()->route('myAccount')}}'"><i
											class="fas fa-tasks"></i> Quản lí tài khoản</li>
									<li style="background-color: #df4a32;"
										onclick="window.location.href='{{url()->route('logout')}}'"><i
											class="fas fa-sign-out-alt"></i> Đăng xuất</li>
								</ul>
							</li>

						</div>
						@else
						<div class="rightoptions">
							<li class="roption">
								<i class="fas fa-user-alt"></i>
								<span class="uptitle">Đăng nhập</span>
								<span class="downtitle">Tài khoản</span>
								<ul>
									<div class="sendform" id="login">
										<p class="logintitle">Đăng nhập</p>
										<form action="{{url()->route('login')}}" method="post">
											@csrf
											<div class="inputgroup">
												<input type="text" name="email" placeholder="Email đăng nhập" autocomplete="off">
											</div>
											<div class="inputgroup">

												<input type="password" name="password" placeholder="Mật khẩu đăng nhập"
													autocomplete="off">
											</div>
											<a id="clickforgot" class="forget" href="#forgot"><span>Quên mật khẩu ?</span></a><br>
											<button class="sendnow" type="submit"><span>Đăng nhập ngay</span></button>
										</form>
									</div>
									<div class="sendform" id="register">

										<p class="logintitle">Đăng ký</p>
										<form action="{{url()->route('postRegister')}}" method="post">
											@csrf
											<div class="inputgroup">
												<input type="text" name="name" placeholder="Tên đầy đủ" autocomplete="off">
											</div>
											<div class="inputgroup">
												<input type="text" name="phone" placeholder="Số điện thoại" autocomplete="off">
											</div>
											<div class="inputgroup">

												<input type="text" name="email" placeholder="Email đăng nhập" autocomplete="off">
											</div>
											<div class="inputgroup">

												<input type="password" name="password" placeholder="Mật khẩu đăng nhập"
													autocomplete="off">
											</div>
											<button class="sendnow"><span>Đăng ký ngay</span></button>
										</form>
									</div>
									<div class="sendform" id="forgot" style="position: relative;">

										<p class="logintitle"> Khôi phục tài khoản</p>
										<span style="margin-top:10px;width:100px;display:none;font-size:0.8em;"
											id="RecoveryMessage"></span>
										<form onsubmit="return false;">
											<div class="inputgroup" id="recoveryGroup">
												<input id="recoveryEmail" type="text" name="email" placeholder="Email"
													autocomplete="off"> <br>
											</div>
											<p id="recoveryError" style="color:red;display:none;margin-top:5px;font-size:0.8em;">
											</p>
											<button class="sendnow" id="backlogin"><span>Trở lại</span></button>
											<button class="sendnow" id="recbutton" onclick="recovery()"><span>Khôi
													phục</span></button>
										</form>
									</div>
									<script>
										var globalEmail = '';
										function recovery() {
											pRecoveryMessage = document.querySelector('#RecoveryMessage')
											pError = document.querySelector('#recoveryError')
											recoveryEmail = document.querySelector('#recoveryEmail')
											recbutton = document.querySelector('#recbutton');
											globalEmail = recoveryEmail.value;
											let email = recoveryEmail.value
											axios.post('{{url()->route('recovery')}}', {
												email: email,
												_token: '{{ csrf_token() }}'
											}).then(data => {
												data = data.data
												if (data.success) {
													pError.style.display = 'none'
													pRecoveryMessage.style.display = 'inline-block'
													pRecoveryMessage.innerHTML = data.message
													recoveryEmail.setAttribute('placeholder', 'Nhập mã số');
													recoveryEmail.value = ''
													recbutton.innerHTML = '<span>Xác Minh</span>'
													recbutton.setAttribute('onclick', 'sendRecoveryCode()');

												} else {
													recbutton.innerHTML = '<span>Khôi phục</span>'
													recbutton.setAttribute('onclick', 'recovery()');
													pError.style.display = 'block'
													pError.innerHTML = data.message
													pRecoveryMessage.style.display = 'none'
												}
											})
										}
										function sendRecoveryCode() {
											pRecoveryMessage = document.querySelector('#RecoveryMessage')
											pError = document.querySelector('#recoveryError')
											recoveryEmail = document.querySelector('#recoveryEmail')
											recbutton = document.querySelector('#recbutton');
											formGroup = document.querySelector('#recoveryGroup')
											axios.post('{{url()->route('postReset')}}', {
												_token: '{{csrf_token()}}',
												code: recoveryEmail.value,
												email: globalEmail
											}).then(data => {
												data = data.data
												if (data.canRecovery) {
													pError.style.display = 'none'
													recbutton.setAttribute('onclick', 'sendRecoveryInfo()');
													recbutton.innerHTML = '<span>Cập Nhật</span>'
													recoveryEmail.setAttribute('placeholder', 'Nhập mật khẩu mới')
													recoveryEmail.setAttribute('type', 'password')
													recoveryEmail.value = ''
													input = document.createElement('input');
													input.setAttribute('id', 'confirmPassword')
													input.setAttribute('type', 'password')
													input.setAttribute('placeholder', 'Xác nhận mật khẩu')
													formGroup.appendChild(input)
												} else {
													pError.style.display = 'block'
													pError.innerHTML = data.message
												}
											})


										}
										function sendRecoveryInfo() {
											pRecoveryMessage = document.querySelector('#RecoveryMessage')
											pError = document.querySelector('#recoveryError')
											recoveryPass1 = document.querySelector('#recoveryEmail')
											recoveryPass2 = document.querySelector('#confirmPassword')
											recbutton = document.querySelector('#recbutton');
											formGroup = document.querySelector('#recoveryGroup')
											if (recoveryPass1.value != recoveryPass2.value) {
												pError.style.display = 'block'
												pError.innerHTML = 'Vui lòng nhập đúng mật khẩu'
											} else {
												axios.post('{{url()->route('postRecovery')}}', {
													_token: '{{csrf_token()}}',
													email: globalEmail,
													password: recoveryPass1.value
												}).then(data => {
													data = data.data
													if (data.success) {
														document.querySelector('#forgot').innerHTML = '<center style="font-size:1.2em;color:green">Cập nhật mật khẩu thành công</center>'
														setTimeout(() => {
															$('#forgot').hide();
															$('#register').fadeOut(0);
															$('#login').fadeIn(500);
															$('#clickregister').show();
															$('#clicklogin').hide();
															document.querySelector('#forgot').innerHTML = '<p class="logintitle" > Khôi phục tài khoản</p><span style="margin-top:10px;width:100px;display:none;" id="RecoveryMessage"></span><form onsubmit="return false;"><div class="inputgroup" id="recoveryGroup"><input id="recoveryEmail" type="text" name="email" placeholder="Email"autocomplete="off"> <br></div><p id="recoveryError" style="color:red;display:none;margin-top:5px"></p><button class="sendnow" id="backlogin"><span>Trở lại</span></button><button class="sendnow" id="recbutton" onclick="recovery()"><span>Khôi phục</span></button></form>'
														}, 1500);
													}
												})
											}
										}
									</script>
									<li id="clicklogin"><i class="fas fa-sign-in-alt"></i> Đăng nhập</li>
									<li id="clickregister"><i class="fas fa-user-plus"></i> Đăng ký</li>
									<li style="background: #4166b2">&emsp;<i class="fab fa-facebook-f"></i>&emsp;| Đăng nhập với
										facebook</li>
									<li style="background-color: #df4a32;"
										onclick="window.location.href = '{{url()->route('GoogleRedirect')}}'"><i
											class="fab fa-google-plus-g"></i> | Đăng nhập với
										Google</li>
								</ul>
							</li>

						</div>
						@endif
						<div class="cartarea">
							<li>
								<i style="font-size: 1.8em" class="fas fa-shopping-cart"></i>
								<span class="carttitle">Giỏ hàng </span><b id="cartCount">{{$myCart->getQuantityAll()}}</b>
								<ul id="myCart">
									@if ($myCart->getTotal()>0)
									<span class="yourcart">Sản phẩm đã chọn:</span>
									<div id="cartProducts">
										@foreach ($myCart->getCart() as $myProduct)
										<li>
											<img src="{{url($myProduct['avatar'])}}" alt="" class="cartimg">
											<span class="cartname"><a href="#">{{$myProduct['name']}} </a></span>
											<span class="cartinfo">
												<span class="cartcost">{{number_format($myProduct['price'])}}
													<sup>VND</sup></span> x
												<span class="quantity">{{$myProduct['quantity']}}</span>
											</span>
											<span class="closecart"
												onclick="delCart({{$myProduct['id']}});this.parentElement.parentElement.removeChild(this.parentElement)">×</span>
										</li>
										@endforeach
									</div>
									<li class="carttotal">
										<span> Tổng cộng: <span id="totalCart">{{number_format($myCart->getTotal())}}</span>
											<sup>VND</sup></span>
									</li>
									<div class="groupcartbtn">
										<button class="btnviewcart"><a href="{{url('/cart')}}">Xem giỏ hàng</a></button>
										<button class="btncartpay"><a href="{{url('/payment')}}">Thanh toán ngay</a></button>
									</div>
									@else
									<span class="yourcart">Chưa có sản phẩm nào trong giỏ hàng</span>
									@endif
								</ul>
							</li>
						</div>
						<script>
							function addCart(id) {
								let preCount = {{ $myCart-> getQuantityAll()
							}}
							let quan = 1
							axios.post('{{url()->route('addCart')}}', {
								id: id,
								quantity: quan
							}).then(data => {
								if (data.data.success) {
									window.location.reload()
								}
							})
							}
							function delCart(id) {
								axios.post('{{url()->route('deleteCart')}}/', { id: id }).then(data => {
									setTimeout(() => {
										if (data.data.success) {
											let count = 0;
											let stringLi = ''
											let total = 0
											data.data.dataCart.map(product => {
												count += product.quantity
												total += product.quantity * product.price
												stringLi += '<li><img src="../' + product.avatar + '" alt="" class="cartimg"><span class="cartname"><a href="#">' + product.name + ' </a></span><span class="cartinfo"><span class="cartcost">' + new Intl.NumberFormat('ja-JP').format(product.price) + ' <sup>VND</sup></span> x<span class="quantity">' + product.quantity + '</span></span><span class="closecart" onclick="delCart(' + product.id + ');this.parentElement.parentElement.removeChild(this.parentElement)">×</span></li>'
											})
											total = new Intl.NumberFormat('ja-JP').format(total)
											if (count == 0) {
												window.location.reload()
												return;
											} else {
												document.querySelector('#cartProducts').innerHTML = stringLi
											}
											document.querySelector('#myCart').setAttribute('style', 'display:block')
											setTimeout(() => {
												document.querySelector('#myCart').removeAttribute('style')
											}, 5000);
											document.querySelector('#cartCount').innerHTML = count
											document.querySelector('#totalCart').innerHTML = total
										}
									}, 0);
								})
							}
						</script><!-- endrightoption -->
					</div>
					<div class="introbottom">
						<li style="font-weight: 500" id="megahovertop"><i class="fas fa-stream"></i> DANH MỤC SẢN PHẨM

						</li>
						<li><span class="addressslected"><img src="assets/img/gps.png" alt="Địa chỉ của bạn"
									class="ibicon"></span> <input value="TP Hồ Chí Minh" placeholder="TP Hồ Chí Minh" type="text"
								list="data_address" id="select_address">
							<datalist name="" id="data_address"></select>
								<option value="Đà Nẵng">
								<option value="Hà Nội">
								<option value="Hải phòng">
								<option value="TP Hồ Chí Minh" selected="selected">
								<option value="Huế">
									</select></li>
						<li id="justviewproducts">Sản phẩm vừa xem <i class="fas fa-chevron-down downarrow"></i></li>
						<li id="verify">
							<div class="circleimg">
								<img src="assets/img/quanlity.png" alt="Sản phẩm chính hàng" class="ibicon">
							</div>
							<div class="topbottext">
								<span class="quatext" style=>Sản phẩm chính hãng</span> <br> <span class="quatext">Chất lượng
									100%</span>
							</div>
						</li>
						<li id="shipped">
							<div class="circleimg">
								<img src="assets/img/shipped.png" alt="Giao hàng nhanh chóng" class="ibicon">
							</div>
							<div class="topbottext">
								<span class="quatext" style=>Giao hàng nhanh chóng</span> <br> <span class="quatext">Đảm bảo
									đúng hạn</span>
							</div>
						</li>
						<li class="explo"><span class="explotitle">Khám phá&hellip;</span>
							<ul>
								<li><span>Giới thiệu</span> </li>
								<li><span>Apps</span> </li>
								<li><span>Ngôn ngữ</span> </li>
								<li><span>Hỗ trợ</span> </li>
								<li><span>Chính sách</span> </li>
								<hr>
								<li>
									<a href="#facebook"><i style="color:#4166b2" class="fab fa-facebook-f"></i></a>
									<a href="#twiter"><i style="color:#1da1f2" class="fab fa-twitter"></i></a>
									<a href="#instagram"><i class="fab fa-instagram"></i></a>
									<a href="#pinterest"><i style="color:#e60023" class="fab fa-pinterest-p"></i></a>
								</li>
							</ul>
						</li>

					</div>
					<div class="justviewlist">
						@foreach ($viewedList ?? [] as $viewedProduct)
						<div>
							<a href="{{url('/products/'.$viewedProduct['slug'])}} " class="iconsearch"><i
									class="fas fa-search"></i></a> <img class="smallboxproduct"
								src="{{url($viewedProduct['avt'])}}">
						</div>
						@endforeach
					</div>
					<div class="megamenu" id="megaheader">
						<ul>
							@foreach ($categories as $category)
							<li><span><i class="{{$category->icon}}"></i>&ensp;&ensp;{{$category->name}}</span>
								<ul>
									<div class="colmenu">
										<div class="megafilter"><i class="fab fa-hotjar" style="color:red"></i> Nổi bật</div>
										@foreach ($category->getTrendProducts() as $TrendProduct)
										<li><a href="{{url('products/'.$TrendProduct->slug)}}">{{$TrendProduct->name}}</a> </li>
										@endforeach

									</div>
									<div class="colmenu">
										<div class="megafilter"><i class="fas fa-file-signature"
												style="color:rgb(0, 238, 255)"></i> Thương hiệu</div>
										@foreach ($alias::GetTradeMarks($category['id'])  as $brand)
											
										<li><a
												href="{{url('categories/'.$category->slug.'?thuonghieu='.trim($brand->name,'"'))}}">{{trim($brand->name,'"')}}</a>
										</li>
										@endforeach

									</div>
									<div class="colmenu">
										<div class="megafilter"><i class="fas fa-dollar-sign" style="color:greenyellow"></i> Mức
											giá</div>
										<li><a href="{{url('search?cat='.$category->id.'&from=0&to=100000')}}">Dưới 100k</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=100000&to=300000')}}">100k đến
												300k</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=300000&to=500000')}}">300k đến
												500k</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=500000&to=700000')}}">500k đến
												700k</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=0&to=1000000')}}">Dưới 1 triệu</a>
										</li>
										<li><a href="{{url('search?cat='.$category->id.'&from=1000000&to=3000000')}}">1 triệu đến
												3 triệu</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=3000000&to=5000000')}}">3 triệu đến
												5 triệu</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=5000000&to=10000000')}}">Dưới 10
												triệu</a></li>
										<div class="megafilter"><i class="fas fa-angle-double-down" style="color:#25586b"></i>
											Khuyến mãi</div>
										<div class="megasale">
											<a href="#view"><img src="assets/img/product2.jpg" alt=""></a>

										</div>
									</div>
									<div class="colmenu">
										<div class="megafilter"><i class="fas fa-feather" style="color:green"></i> Theo chức năng
										</div>
										<li><a href="filter.html">Điện thoại sefile</a></li>
										<li><a href="filter.html">Điện thoại chơi game</a></li>
										<li><a href="filter.html">Nghe gọi đơn giản</a></li>
										<li><a href="filter.html">Máy tính bảng đọc báo</a></li>
										<li><a href="filter.html">Pin xài lâu</a></li>
										<div class="megafilter"><i class="fas fa-undo"></i> Máy đổi trả</div>
										<li><a href="filter.html">Điện thoại</a></li>
										<li><a href="filter.html">Máy tính bảng</a></li>
										<div class="megafilter"><i class="fas fa-fire-alt" style="color:red"></i> Sản phẩm mới
										</div>
										<li><a href="filter.html"></a>Iphone10 64Gb 2019</li>
										<li><a href="filter.html">Galaxy 2019 128Gb</a></li>
										<li><a href="filter.html">Bphone 4</a></li>
										<li><a href="filter.html">iPad 2019 11inch</a></li>
									</div>

								</ul>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
				<!-- endboxtopmain -->


			</div>
			<!-- endboxtop -->

		</div>
		<div class="fixedbanner" id="lbanner">
			<a href="#banner" target="__blank"><img src="assets/img/lbanner.jpg" alt=""></a>

		</div>
		<div class="fixedbanner" id="rbanner">
			<a href="#banner" target="__blank"><img src="assets/img/rbanner.jpg" alt=""></a>
		</div>
		<!-- endheader -->
		<!-- body -->
		<div class="body">

			<!-- bodycenter -->
			<div class="bodycenter">
				<div class="mobilecats">
					<p>DANH MỤC SẢN PHẨM</p>
					<div class="mcats">
						@foreach ($categories as $category)
						<div class="boxcat">
							<img src="{{$category->img}}" alt="">
							<a href="{{url('categories/'.$category->slug)}}">
								<p>{{$category->name}}</p>
							</a>
						</div>
						@endforeach

					</div>
				</div>
				<div class="centerbanner" id="mobliebanner">
					<a href="#centerbanner"><img src="assets/img/topbanner.png"></a>
				</div>
				<!-- bodyheader -->
				<div class="bodyheader">

					<!-- megamenu -->
					<div class="megamenu">
						<ul>
							@foreach ($categories as $category)
							<li><span><i class="{{$category->icon}}"></i>&ensp;&ensp;{{$category->name}}</span>
								<ul>
									<div class="colmenu">
										<div class="megafilter"><i class="fab fa-hotjar" style="color:red"></i> Nổi bật</div>
										@foreach ($category->getTrendProducts() as $TrendProduct)
										<li><a href="{{url('products/'.$TrendProduct->slug)}}">{{$TrendProduct->name}}</a> </li>
										@endforeach
									</div>
									<div class="colmenu">
										<div class="megafilter"><i class="fas fa-file-signature"
												style="color:rgb(0, 238, 255)"></i> Thương hiệu</div>
										@foreach ($alias::GetTradeMarks($category->id) as $brand)
										<li><a
												href="{{url('search?cat='.$category->id.'&thuonghieu='.trim($brand->name,'"'))}}">{{trim($brand->name,'"')}}</a>
										</li>
										@endforeach

									</div>
									<div class="colmenu">
										<div class="megafilter"><i class="fas fa-dollar-sign" style="color:greenyellow"></i> Mức
											giá</div>
										<li><a href="{{url('search?cat='.$category->id.'&from=0&to=100000')}}">Dưới 100k</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=100000&to=300000')}}">100k đến
												300k</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=300000&to=500000')}}">300k đến
												500k</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=500000&to=700000')}}">500k đến
												700k</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=0&to=1000000')}}">Dưới 1 triệu</a>
										</li>
										<li><a href="{{url('search?cat='.$category->id.'&from=1000000&to=3000000')}}">1 triệu đến
												3 triệu</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=3000000&to=5000000')}}">3 triệu đến
												5 triệu</a></li>
										<li><a href="{{url('search?cat='.$category->id.'&from=5000000&to=10000000')}}">Dưới 10
												triệu</a></li>
										<div class="megafilter"><i class="fas fa-angle-double-down" style="color:#25586b"></i>
											Khuyến mãi</div>
										<div class="megasale">
											<a href="#view"><img src="assets/img/product2.jpg" alt=""></a>

										</div>
									</div>
									<div class="colmenu">
										<div class="megafilter"><i class="fas fa-feather" style="color:green"></i> Theo chức năng
										</div>
										<li><a href="filter.html">Điện thoại sefile</a></li>
										<li><a href="filter.html">Điện thoại chơi game</a></li>
										<li><a href="filter.html">Nghe gọi đơn giản</a></li>
										<li><a href="filter.html">Máy tính bảng đọc báo</a></li>
										<li><a href="filter.html">Pin xài lâu</a></li>
										<div class="megafilter"><i class="fas fa-undo"></i> Máy đổi trả</div>
										<li><a href="filter.html">Điện thoại</a></li>
										<li><a href="filter.html">Máy tính bảng</a></li>
										<div class="megafilter"><i class="fas fa-fire-alt" style="color:red"></i> Sản phẩm mới
										</div>
										<li><a href="filter.html"></a>Iphone10 64Gb 2019</li>
										<li><a href="filter.html">Galaxy 2019 128Gb</a></li>
										<li><a href="filter.html">Bphone 4</a></li>
										<li><a href="filter.html">iPad 2019 11inch</a></li>
									</div>

								</ul>
							</li>
							@endforeach
						</ul>
					</div>
					<!-- endmegamenu -->
					<!-- bannerslider -->
					<div class="bannerslider">
						<div class="movegroup">
							<button class="customPrevBtn"><i class="fas fa-arrow-left"></i></button>
							<button class="customNextBtn"><i class="fas fa-arrow-right"></i></button>
						</div>
						<div class="owl-carousel owl-theme bigslider">
							<div class="item">
								<a href="#viewbanner"><img src="assets/img/bigbanner1.png" alt=""></a>

							</div>
							<div class="item">
								<a href="#viewbanner"><img src="assets/img/bigbanner2.jpg" alt=""></a>
							</div>
							<div class="item">
								<a href="#viewbanner"><img src="assets/img/bigbanner3.jpg" alt=""></a>
							</div>
							<div class="item">
								<a href="#viewbanner"><img src="assets/img/bigbanner4.png" alt=""></a>
							</div>
							<div class="item">
								<a href="#viewbanner"><img src="assets/img/bigbanner5.png" alt=""></a>
							</div>


						</div>
					</div>
					<!-- endbannerslider -->
					<div class="subbanner">
						<div class="rbanner1">
							<a href="#viewsmallbanner"><img src="assets/img/rsmallbanner1.jpg" alt=""></a>
							<p class="lbar"></p>
							<p class="rbar"></p>
						</div>
						<div class="rbanner2">
							<a href="#viewsmallbanner"><img src="assets/img/rsmallbanner2.jpg" alt=""></a>
							<p class="lbar"></p>
							<p class="rbar"></p>
						</div>
					</div>
				</div>
				<!-- endbodyheader -->
				<!-- flashsales -->

				<div class="flashsales" id="flashsales">
					<div class="salestitle">
						<i class="fab fa-hotjar"></i>
						<p class="stitle"><span>Flas<i class="fas fa-bolt"></i> Sales </span></p><br>
						<p class="sdescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, quas.</p>
					</div>
					<div class="salesproducts">
						@foreach ($flashsales as $flash)

						<div class="product">
							<div class="imgbox">
								<a href="#viewflash"><img src="{{url($flash->RlProduct->ImgAvt->src ?? '')}}" alt=""></a>
							</div>

							<div class="salespercent">-30%</div>
							<div class="product_name">
								<a href="{{url('products/'.$flash->RlProduct->slug)}}">{{$flash->RlProduct->name}}</a>
							</div>
							@php
							$discount = $flash->RlProduct->AvailableDiscount()->get();
							@endphp
							@if (count($discount)>0)
							<div class="salespercent">{{$discount[0]->percent ?? ''}}% </div>
							@endif
							<div class="product_price">
								@if (count($discount)>0)
								<span
									class="newprice">{{number_format($flash->RlProduct->price-$discount[0]->percent/100*$flash->RlProduct->price)}}
									<sup>đ</sup></span>
								<span class="oldprice">{{number_format($flash->RlProduct->price)}} <sup>đ</sup></span>
								@else
								<span class="newprice">{{number_format($flash->RlProduct->price)}} <sup>đ</sup></span>
								@endif
							</div>
							<div class="remaining">
								<p class="rbar">&emsp;
									<p class="rebar" style="width: {{round($flash->selled/$flash->total*100)}}%"></p>
								</p>
								<p class="rtitle">Đã bán {{$flash->selled}}</p>
							</div>
							<div class="rmTime">
								<p>Kết Thúc Trong <br>
									@php
										 $diff = $flash->DiffTime();
									@endphp
									<span class="rmHour" data-hour="{{$diff['rmHours']}}">00</span>
									<span class="rmMin" data-min="{{$diff['rmMins']}}">00</span>
									<span class="rmSecond" data-second="{{$diff['rmSeconds']}}">00</span>
								</p>
							</div>
						</div>
						@endforeach
					</div>

				</div>
				<script>

					setInterval(() => {
						document.querySelectorAll('.rmTime').forEach(rmT => {
							let h = rmT.childNodes[1].childNodes[3];
							let m = rmT.childNodes[1].childNodes[5];
							let s = rmT.childNodes[1].childNodes[7];
							if (s.dataset.second > 0) {
								s.setAttribute('data-second', s.dataset.second - 1);
							} else {
								if (m.dataset.min > 0) {
									s.setAttribute('data-second', 59);
									m.setAttribute('data-min', m.dataset.min - 1);
								} else {
									if (h.dataset.hour > 0) {
										s.setAttribute('data-second', 59);
										m.setAttribute('data-min', 59);
										h.setAttribute('data-hour', h.dataset.hour - 1);
									} else {
										// window.location.reload();
									}
								}
							}
							if (h.dataset.hour < 10) h.innerHTML = "0" + h.dataset.hour
							else h.innerHTML = h.dataset.hour
							if (m.dataset.min < 10) m.innerHTML = "0" + m.dataset.min
							else m.innerHTML = m.dataset.min
							if (s.dataset.second < 10) s.innerHTML = "0" + s.dataset.second
							else s.innerHTML = s.dataset.second
						})
					}, 1000);
				</script>
				<!-- endflashsales -->
				<div class="catsforyou" id="catsforyou">
					<p class="catsforyoutitle">
						DANH MỤC ĐỀ XUẤT
						<span><i class="fas fa-times"></i></span>
					</p>
					<button class="catbtn leftarrow"><i class="fas fa-chevron-left"></i></button>
					<button class="catbtn rightarrow"><i class="fas fa-chevron-right"></i></button>
					<div id="cats_slider" class="owl-carousel ">
						@foreach ($recommandCats as $cat)
						<div class="item">
							<div class="catbox">
								<a href="{{url('/search?cat='.$cat->id)}}">
									<p style="background-image:url('{{url($cat->img)}}')" class="catimg">
										<p></p>
								</a>
								<a href="{{url('/search?cat='.$cat->id)}}">
									<p class="catname">{{$cat->name}}</p>
								</a>

							</div>
						</div>
						@endforeach
					</div>
				</div>
				<!-- categoriesforyou -->
				@if ($user && $streams->count()>0)
					<div class="catsforyou" id="streams">
						<p class="catsforyoutitle">
							LIVE STREAMING
							<span><i class="fas fa-times"></i></span>
						</p>
						<button class="catbtn leftarrow"><i class="fas fa-chevron-left"></i></button>
						<button class="catbtn rightarrow"><i class="fas fa-chevron-right"></i></button>
						<div id="streamsforyou" class="owl-carousel">
							@foreach ($streams as $stream)
								<div class="item">
									<div class="boxStream">
									<video data-key="{{$stream->stream_key}}"></video>
									</div>
									<div class="shopnameStream">
									<a href="{{url()->route('shop',['slug'=>$stream->Seller->slug])}}" >{{$stream->Seller->name}}</a>
									<button><i class="far fa-eye"></i> <span>{{$stream->view}}</span></button></div>
									<div class="streamDescription">
										<p>{{$stream->description}}</p>
										<p><a href="{{url()->route('filter',['idcat'=>$stream->Category->id])}}">#{{$stream->Category->name}}</a></p>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endif
				<!-- endcategoriesforyou -->
				<!-- searchtrending -->
				@if(count($mostedKeyword[0])>0)
				<div class="catsforyou" id="keysforyou">
					<p class="catsforyoutitle">
						XU HƯỚNG TÌM KIẾM
						<span><i class="fas fa-times"></i></span>
					</p>
					<button class="catbtn leftarrow"><i class="fas fa-chevron-left"></i></button>
					<button class="catbtn rightarrow"><i class="fas fa-chevron-right"></i></button>
					<div id="keys_slider" class="owl-carousel">
						@foreach ($mostedKeyword[0] as $index => $key)
						<div class="item">
							<div class="catbox">
								<a href="{{url('/search?cat='.$key['idcat'].'&keyword='.$key['keyword'])}}">
									<p style="background-image:url('{{url($mostedKeyword[1][$index]->Avatar()->src ?? '')}}')"
										class="catimg">
										<p></p>
								</a>
								<a href="{{url('/search?cat='.$key['idcat'].'&keyword='.$key['keyword'])}}">
									<p class="catname">{{$key['keyword']}}</p>
								</a>

							</div>
						</div>
						@endforeach


					</div>
				</div>
				@endif
				
				<!-- endsearchtrending -->
				<!-- centerbanner -->
				<div class="centerbanner">
					<a href="#centerbanner"><img src="assets/img/centerbanner.jpg"></a>
				</div>
				<!-- endcenterbanner -->
				<!-- foryou -->
				<div class="flashsales">
					<div class="fortitle">
						<p>DÀNH RIÊNG CHO BẠN</p>
					</div>
					<div class="salesproducts" id="foryou">
						@foreach($recommandProducts as $product)
						<div class="product">
							<div class="imgbox">
								<a href="#viewflash">
									<img src="{{isset($product->ImgAvt->src) ? url($product->ImgAvt->src) : ''}}" alt="">
								</a>
								<div class="groupcart">
									<a href="javascript:void(0)"> <button title="Thêm vào danh sách yêu thích"><i
												onclick="if(this.getAttribute('class')=='fas fa-heart'){delLove({{$product->id}});this.setAttribute('class','far fa-heart')}else{addLove({{$product->id}});this.setAttribute('class','fas fa-heart')}"
												class="@if($enjoy->is_exists($product->id))
												fas fa-heart
											@else
												far fa-heart
											@endif"></i></button></a>
									<a href="#cartoption" onclick="addCartX({{$product->id}})""> <button onclick="addCartX({{$product->id}})"
											title="Thêm vào giỏ hàng"><i class="fas fa-cart-plus"></i></button></a>
								</div>
								@if ($product->isNew())
								<span id="new_trend"><img src="../assets/img/new.png" alt=""></span>
								@endif
							</div>
							@php
							$discount = $product->Discount->toArray();
							@endphp
							@if (count($discount)>0)
							<div class="salespercent">{{$discount[0]['percent'] ?? ''}}% </div>
							@endif

							<div class="product_name"><a href="{{url('./products/'.$product->slug)}}">{{$product->name}}</a>
							</div>
							<div class="product_price">
								@if (count($discount)>0)
								<span
									class="newprice">{{number_format($product->price-$discount[0]['percent']/100*$product->price)}}
									<sup>đ</sup></span>
								<span class="oldprice">{{number_format($product->price)}} <sup>đ</sup></span>
								@else
								<span class="newprice">{{number_format($product->price)}} <sup>đ</sup></span>
								@endif

							</div>
							<div class="rating">
								<p>
									@for ($i = 1; $i <= $product->Review->avg('star'); $i++)
										<i class="fas fa-star" style="color:orange" id="star"></i>
										@endfor
										@for ($i = 1; $i <= 5-$product->Review->avg('star'); $i++)
											<i class="fas fa-star" id="star"></i>
											@endfor
											<span id="review_count">({{$product->Review->count()}})</span>
								</p>
								<span class="selled"><i class="fas fa-check-double"></i>
									{{$product->getTotalQuantitySelled()}}</span>
							</div>
							<div class="supaddress">
								{{str_replace("Thành phố",'',str_replace("Tỉnh",'',$product->RlSeller->City->name))}}
							</div>

						</div>
						@endforeach
						<script>
							function addLove(id) {
								axios.post('{{url()->route('addEnjoy')}}', {
									id: id,
									type: 1
								}).then(data => {
									data = data.data
									if (data.success) {

									}
								})
							}
							function delLove(id) {
								axios.post('{{url()->route('delEnjoy')}}', {
									id: id,
								}).then(data => {
								})
							}
							function addCartX(id) {
										  let preCount = {{ $myCart-> getQuantityAll()
									 }}
									 let quan = 1
									 axios.post('{{url()->route('addCart')}}', {
										  id: id,
										  quantity: quan
									 }).then(data => {
										  if (data.data.success) {
												window.location.reload()
										  }
									 })
						  }
						</script>
					</div>
				</div>
				<!-- endforyou -->
				<div class="centerbanner">
					<a href="#centerbanner"><img src="assets/img/footbanner.jpg"></a>

				</div>
			</div>
			<!-- endbodycenter -->

		</div>
		<!-- endbody -->
		<!-- footer -->
		@extends('includes.footer')
	</div>

	<script src="assets/js/slide.min.js"></script>
	<script src="assets/js/lazy.js"></script>
	<!-- <script src="assets/js/lazy.plugin.js"></script> -->
	<script src="assets/js/jquery-ui.js"></script>
	<script src="assets/js/index.js"></script>
	<script src="assets/js/socket.init.js"></script>
	<script>
		const createEmptyAudioTrack = () => {
			const ctx = new AudioContext();
			const oscillator = ctx.createOscillator();
			const dst = oscillator.connect(ctx.createMediaStreamDestination());
			oscillator.start();
			const track = dst.stream.getAudioTracks()[0];
			return Object.assign(track, { enabled: false });
		};

		const createEmptyVideoTrack = ({ width, height }) => {
			const canvas = Object.assign(document.createElement('canvas'), { width, height });
			canvas.getContext('2d').fillRect(0, 0, width, height);
			const stream = canvas.captureStream();
			const track = stream.getVideoTracks()[0];
			return Object.assign(track, { enabled: false });
		};
		var getMsgURI = '{{url()->route('getMsgBySeller')}}'
		@if($user)
			socketAuth({{$user->id}},1,'{{$user->password}}')
		@endif
		const peer = new Peer( {host: window.location.hostname, port: 9000, path: '/' });
		
		document.querySelectorAll('#streamsforyou video').forEach(video=>{
			let audioTrack = createEmptyAudioTrack();
			let videoTrack = createEmptyVideoTrack({ width:640, height:480 });
			let mediaStream = new MediaStream([audioTrack, videoTrack]);
			let call = peer.call(video.dataset.key,mediaStream)
			call.on('stream',stream=>{
				document.querySelector('body').click()
				video.srcObject = stream
				video.muted = true
				video.play()
				video.onclick = ()=>{
					socket.emit('view_stream',video.dataset.key)
					document.querySelector('.popupStream').style.display = 'flex'
					let popup = document.querySelector('#popup_video')
					popup.click()
					popup.srcObject = stream
					popup.muted = false
					popup.play()
					document.querySelector('.popupStream').onclick = (e)=>{
						if(e.target.className=='popupStream'){
							e.target.style.display = 'none'
							popup.muted = true
							popup.pause()
							socket.emit('out_stream',video.dataset.key)
						}
					}
					
				}
			})
		})
		
		
	</script>
	
</body>
</html>