@extends('admin.index')

@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin-posts.css') }}"/>
@endpush

@section('content')
<div class="container content">
	<div class="row">
		


		<div class="col-12 mt-3 mb-5">

			
			<div class="wrap-adminPost-info">

				<h3 class="title-pages m-0 text-center ">Administering information about post</h3>
				<div class="adminPost-info">

					<div class="row">
						
						<div class="col-12">
							<div class="adminPost-info__item">
								<p class="adminPost-info__title">Selected post option</p>
								<p class="adminPost-info__text">I would like to add a case, illustrated using one or several photos</p>
							</div>
						</div>

						<div class="col-12">
							<div class="adminPost-info__item adminPost-info__item_mod">

								<p class="adminPost-info__title">I guarantee the patient's anonymity</p>

								<div class="adminPost-info__selection">
									<i class="fa fa-check-square-o active" aria-hidden="true"></i>
								</div>

							</div>
						</div>


					</div> <!-- row -->



					<div class="row">
						<div class="col-12">

							<div class="adminPost-info__item adminPost-info__item_img">
								<p class="adminPost-info__title">Uploaded images</p>
								
								<div class="wrap-img">
									<div class="edit_image item-img item-img-mod btn btn-secondary" title="Modifier les images" data-toggle="modal" data-target=".bd-example-modal-lg">
										<img class="img-fluid" src="http://clinicase.djstreet11-vps.tk/uploads1/4ln7R8W4LfiMJkpArHdPn8OkFlWzmv4y39G8HbKO.jpeg">
									</div>
									<div class="edit_image item-img item-img-mod btn btn-secondary" title="Modifier les images" data-toggle="modal" data-target=".bt-example-modal-lg">
										<img class="img-fluid" src="http://clinicase.djstreet11-vps.tk/uploads1/7MuZ4I13XQhazV5mUOMNFjLUEnCieBaGZzPAAJuC.jpeg">
									</div>
									<div class="edit_image item-img item-img-mod btn btn-secondary" title="Modifier les images" data-toggle="modal" data-target=".bc-example-modal-lg">
										<img class="img-fluid" src="http://clinicase.djstreet11-vps.tk/uploads1/IrUacnJYlrruZkgrf5GUCiQWng4lvWgo5KepS2qB.jpeg">
									</div>
									<div class="edit_image item-img item-img-mod btn btn-secondary" title="Modifier les images">
										<img class="img-fluid" src="http://clinicase.djstreet11-vps.tk/uploads1/mWs2rBx21xbQ4NCMzqc3b7CGLBHCJuBjycgOivho.jpeg">
									</div>
									<div class="edit_image item-img item-img-mod btn btn-secondary" title="Modifier les images">
										<img class="img-fluid" src="http://clinicase.djstreet11-vps.tk/uploads1/BfgUpLzSkNxGOgO0Ym2FAHOnFIQF5YRbTS0N57Nj.jpeg">
									</div>
								</div>


								<!-- modal window -->
								<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-lg">
										<div class="modal-content">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<div class="wrap-modal-img">
												<img class="modal-img img-fluid" src="http://clinicase.djstreet11-vps.tk/uploads1/4ln7R8W4LfiMJkpArHdPn8OkFlWzmv4y39G8HbKO.jpeg">
											</div>
										</div>
									</div>
								</div> <!-- modal -->

								<div class="modal fade bt-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-lg">
										<div class="modal-content">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<div class="wrap-modal-img">
												<img class="modal-img img-fluid" src="http://clinicase.djstreet11-vps.tk/uploads1/7MuZ4I13XQhazV5mUOMNFjLUEnCieBaGZzPAAJuC.jpeg">
											</div>
										</div>
									</div>
								</div> <!-- modal -->

								<div class="modal fade bc-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-lg">
										<div class="modal-content">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
											<div class="wrap-modal-img">
												<img class="modal-img img-fluid" src="http://clinicase.djstreet11-vps.tk/uploads1/IrUacnJYlrruZkgrf5GUCiQWng4lvWgo5KepS2qB.jpeg">
											</div>
										</div>
									</div>
								</div> <!-- modal -->


							</div>

						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="adminPost-info__item">
								<p class="adminPost-info__title">Title of work performed</p>
								<p class="adminPost-info__text">Understanding the free PSA test</p>
							</div>
							<div class="adminPost-info__item">
								<p class="adminPost-info__title">Description of the clinical case</p>
								<p class="adminPost-info__case">A free PSA test is typically given after a total PSA test, to help doctors rule out cancer or to indicate how far cancer has progressed after treatment. The test involves taking a blood sample, which is sent to a laboratory for analysis. The free PSA test is often used before a biopsy to provide initial confirmation of a doctor's diagnosis. There are some drawbacks to using PSA testing. There may be high rates of false positives, meaning that the test can show lower levels of PSA when levels are actually normal. In some cases, normal results from the tests do not rule out prostate cancer. Even when PSA levels are too low to indicate a problem, a person can still have prostate cancer. People may also have elevated levels of PSA without having cancer. Because of this, PSA tests are often just one part of a complete diagnosis. If results are at all unclear, many doctors still recommend a biopsy or additional testing to help with diagnoses.</p>
							</div>
							<div class="adminPost-info__item">
								<p class="adminPost-info__title">Medical specialty</p>
								<p class="adminPost-info__text">Anatomo-pathologie</p>
							</div>
							<div class="adminPost-info__item">
								<p class="adminPost-info__title">Anatomical area</p>
								<p class="adminPost-info__text">anatomi2</p>
							</div>
						</div>
					</div>




				</div> <!-- adminPosts-info -->
			</div>

		</div>
	</div>
</div>
@endsection

@push('scripts')
<script type="text/javascript" src="{{ asset('js/admin-posts.js') }}"></script>
@endpush