@extends('admin.layouts.app')
@section('content')
<div class="pcoded-inner-content">
	<div class="main-body">
		<div class="page-wrapper">
			<!-- [ breadcrumb ] start -->
			<div class="page-header">
				<div class="page-block">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="page-header-title">
								<h5 class="m-b-10">Helpdesk</h5>
							</div>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a>
								</li>
								<li class="breadcrumb-item"><a href="#!">Help Dashboard</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- [ breadcrumb ] end -->
			<!-- [ Main Content ] start -->
			<div class="row">
				<!-- process-section start -->
				<div class="col-md-4">
					<div class="card seo-card">
						<div class="card-body seo-statustic">
							<i class="fas fa-database text-c-green f-16 mb-2"></i>
							<h5 class="m-0">65%</h5>
							<p class="m-0">Memory</p>
						</div>
						<div class="process">
							<div id="process1" style="height:87px"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card seo-card">
						<div class="card-body seo-statustic">
							<i class="fas fa-undo-alt text-c-blue f-16 mb-2"></i>
							<h5 class="m-0">$46,845</h5>
							<p class="m-0">Revenue</p>
						</div>
						<div class="process">
							<div id="process2" style="height:87px"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card seo-card">
						<div class="card-body seo-statustic">
							<i class="fas fa-folder-open text-c-red f-16 mb-2"></i>
							<h5 class="m-0">$50,845</h5>
							<p class="m-0">Sale</p>
						</div>
						<div class="process">
							<div id="process3" style="height:87px"></div>
						</div>
					</div>
				</div>
				<!-- process-section end -->
				<!-- activity section start -->
				<div class="col-xl-8 col-md-12">
					<div class="card">
						<div class="card-header">
							<h5>Activity Feed</h5>
						</div>
						<div class="card-body">
							<ul class="feed-blog">
								<li class="active-feed">
									<div class="feed-user-img">
										<img class="img-fluid img-radius wid-40" src="assets/images/user/avatar-1.jpg"
											alt="">
									</div>
									<h6><span class="label label-danger">File</span> Eddie uploaded new
										files: <small class="text-muted">2 hours ago</small></h6>
									<p class="m-b-15 m-t-15">hii <b> @everone</b> Lorem Ipsum is simply
										dummy text of the printing and typesetting industry.</p>
									<div class="row">
										<div class="col-auto text-center">
											<img src="assets/images/light-box/l5.jpg" class="img-fluid wid-100" alt="">
											<h6 class="m-t-5 m-b-0">Old Scooter</h6>
											<p class="text-muted m-b-15"><small>PNG-100KB</small></p>
										</div>
										<div class="col-auto text-center">
											<img src="assets/images/light-box/sl3.jpg" class="img-fluid wid-100" alt="">
											<h6 class="m-t-5 m-b-0">Wall Art</h6>
											<p class="text-muted m-b-15"><small>PNG-150KB</small></p>
										</div>
										<div class="col-auto text-center">
											<img src="assets/images/light-box/l5.jpg" class="img-fluid wid-100" alt="">
											<h6 class="m-t-5 m-b-0">Microphone</h6>
											<p class="text-muted m-b-15"><small>PNG-150KB</small></p>
										</div>
									</div>
								</li>
								<li class="diactive-feed">
									<div class="feed-user-img">
										<img class="img-fluid img-radius wid-40" src="assets/images/user/avatar-2.jpg"
											alt="">
									</div>
									<a href="#!">
										<h6><span class="label label-success">Task</span>Sarah marked
											the Pending Review: <small class="text-c-green m-10"> Trash
												Can Icon Design</small><small class="text-muted">2 hours
												ago</small></h6>
									</a>
								</li>
								<li class="diactive-feed">
									<div class="feed-user-img">
										<img class="img-fluid img-radius wid-40" src="assets/images/user/avatar-3.jpg"
											alt="">
									</div>
									<a href="#!">
										<h6><span class="label label-primary">comment</span> abc posted
											a task: <small class="text-c-green m-10">Design a new
												Homepage</small> <small class="text-muted">6 hours
												ago</small></h6>
									</a>
									<p class="m-b-15 m-t-15 ">hii <b> @everone</b> Lorem Ipsum is simply
										dummy text of the printing and typesetting industry.</p>
								</li>
								<li class="active-feed">
									<div class="feed-user-img">
										<img class="img-fluid img-radius wid-40" src="assets/images/user/avatar-4.jpg"
											alt="">
									</div>
									<a href="#!">
										<h6><span class="label label-warning">Task</span>Sarah marked :
											<small class="text-c-green m-10"> do Icon
												Design</small><small class="text-muted">10 hours
												ago</small>
										</h6>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- activity section end -->
				<!-- rating section start -->
				<div class="col-xl-4 col-md-12">
					<div class="row">
						<div class="col-md-12">
							<div class="card user-list">
								<div class="card-header">
									<h5>Rating</h5>
									<div class="card-header-right">
										<div class="btn-group card-option">
											<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown"
												aria-haspopup="true" aria-expanded="false">
												<i class="feather icon-more-horizontal"></i>
											</button>
											<ul class="list-unstyled card-option dropdown-menu dropdown-menu-end">
												<li class="dropdown-item full-card"><a href="#!"><span><i
																class="feather icon-maximize"></i>
															maximize</span><span style="display:none"><i
																class="feather icon-minimize"></i>
															Restore</span></a></li>
												<li class="dropdown-item minimize-card"><a href="#!"><span><i
																class="feather icon-minus"></i>
															collapse</span><span style="display:none"><i
																class="feather icon-plus"></i>
															expand</span></a></li>
												<li class="dropdown-item reload-card"><a href="#!"><i
															class="feather icon-refresh-cw"></i>
														reload</a></li>
												<li class="dropdown-item close-card"><a href="#!"><i
															class="feather icon-trash"></i> remove</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card-block">
									<div class="row align-items-center justify-content-center m-b-20">
										<div class="col-6">
											<h2 class="f-w-300 d-flex align-items-center float-start m-0">
												4.7 <i class="fas fa-star f-10 m-l-10 text-c-yellow"></i>
											</h2>
										</div>
										<div class="col-6">
											<h6 class="d-flex  align-items-center float-end m-0">0.4 <i
													class="fas fa-caret-up text-c-green f-22 m-l-10"></i>
											</h6>
										</div>
									</div>

									<div class="row">
										<div class="col-xl-12">
											<h6 class="align-items-center float-start"><i
													class="fas fa-star f-10 m-r-10 text-c-yellow"></i>5
											</h6>
											<h6 class="align-items-center float-end">384</h6>
											<div class="progress m-t-30 m-b-20" style="height: 6px;">
												<div class="progress-bar progress-primary" role="progressbar"
													style="width: 70%;" aria-valuenow="70" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>

										<div class="col-xl-12">
											<h6 class="align-items-center float-start"><i
													class="fas fa-star f-10 m-r-10 text-c-yellow"></i>4
											</h6>
											<h6 class="align-items-center float-end">145</h6>
											<div class="progress m-t-30  m-b-15" style="height: 6px;">
												<div class="progress-bar progress-primary" role="progressbar"
													style="width: 35%;" aria-valuenow="35" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>

										<div class="col-xl-12">
											<h6 class="align-items-center float-start"><i
													class="fas fa-star f-10 m-r-10 text-c-yellow"></i>3
											</h6>
											<h6 class="align-items-center float-end">24</h6>
											<div class="progress m-t-30  m-b-15" style="height: 6px;">
												<div class="progress-bar progress-primary" role="progressbar"
													style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>

										<div class="col-xl-12">
											<h6 class="align-items-center float-start"><i
													class="fas fa-star f-10 m-r-10 text-c-yellow"></i>2
											</h6>
											<h6 class="align-items-center float-end">1</h6>
											<div class="progress m-t-30  m-b-15" style="height: 6px;">
												<div class="progress-bar progress-primary" role="progressbar"
													style="width: 10%;" aria-valuenow="10" aria-valuemin="0"
													aria-valuemax="100"></div>
											</div>
										</div>
										<div class="col-xl-12">
											<h6 class="align-items-center float-start"><i
													class="fas fa-star f-10 m-r-10 text-c-yellow"></i>1
											</h6>
											<h6 class="align-items-center float-end">0</h6>
											<div class="progress m-t-30  m-b-0" style="height: 6px;">
												<div class="progress-bar" role="progressbar" style="width:0;"
													aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-block">
									<h5>Growth Rate</h5>
									<div class="row align-items-center justify-content-center">
										<div class="col-6">
											<h2 class="f-w-300 m-t-20">48%</h2>
										</div>
										<div class="col-6 text-end">
											<i class="fas fa-chart-pie f-30 text-c-green"></i>
										</div>
									</div>
									<span class="text-muted text-center d-block">From Last Month</span>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- rating section end -->
			</div>
			<!-- [ Main Content ] end -->
		</div>
	</div>
</div>
@endsection()