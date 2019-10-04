@extends('social.index')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-contact.css') }}"/>
@endpush

@section('content')
<div class="container content mt-3 mb-5">
    <div class="row">
        <div class="col-lg-3 mb-lg-0 order-1 mb-3 order-lg-0">
            @component('social.left_menu')
                @slot('page')
                    chat
                @endslot
            @endcomponent
        </div>

		<div class="col-lg-9 order-2 order-lg-1">

			<div class="row wrap-contacts">
				<div class="col-lg-12">
					<h3 class="title-pages m-0 text-center ">Contacts</h3>
				</div>

				{{--@forelse ($contacts as $contact)--}}
				<div class="col-lg-12">

					<div class="contacts-content b-r-5">
						<div class="row">
							<div class="col-lg-12 contacts-search d-flex justify-content-center">

								<div class="saerch-group mb-3">
									<div class="search-form">
										<input class="search-drop-down-list form-control mr-sm-2" type="search" placeholder="Rechercher de nouveaux contacts" aria-label="Search">
									</div>

									<div class="contact-list">
										<ul class="drop-down-list">
											<li class="item-search-contact d-flex justify-content-between align-items-center">
												<span class="search-name w-100 text-center">Not Name</span>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- contacts-search -->



							<div class="col-lg-12">
								<p class="mb-3">Vos contacts</p>
							</div>

							<div class="col-lg-12">
								<div class="row my-contacts">
									@forelse ($contacts as $contact)
									<div class="col-lg-6 mb-3 my-contacts-item">
										<i class="fa fa-times" aria-hidden="true"></i>
										<!-- Button trigger modal -->
										<i class="fa fa-pencil" aria-hidden="true" data-toggle="modal" data-target="#exampleModal_{{ $contact->id }}" data-whatever="@mdo"></i>
										<!-- Modal -->
										<div class="modal fade" id="exampleModal_{{ $contact->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Modifier le contact</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<form>
															<div class="form-group">
																<label for="recipient-name" class="col-form-label">Modifier le nom</label>
																<input type="text" class="form-control" id="recipient-name">
															</div>
															<div class="form-group">
																<a href="#">Supprimer le contact</a>
															</div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
														<button type="button" class="btn btn-primary">Submit</button>
													</div>
												</div>
											</div>
										</div>
										<a class="my-contacts-link d-flex flex-nowrap align-items-center" href="{{ url('/chat/'.$contact->contact_user->id) }}">
											<img class="rounded-circle preview-img" src="{{ asset('images/uploads/avatars/'.$contact->contact_user->image) }}"/>
											<div class="d-flex flex-column">
												<p class="my-contacts-name">{{ $contact->custom_name_user }}</p>
												<p class="my-contacts-specialty">
													@if ($contact->contact_user->user_profile == 1 )
														Médecin
													@elseif ($contact->contact_user->user_profile == 2)
														Interne en médecine
													@elseif ($contact->contact_user->user_profile == 3)
														Etudiant
													@else
														Autre profession médicale
													@endif
												</p>
											</div>
										</a>
									</div> <!-- my-contacts-item -->
									@empty
										<div class="col-lg-12">
											<p>Pas encore de contact. Recherchez de nouveaux contacts parmi vos connaissances !</p>
										</div>
									@endforelse
								</div> <!-- my-contacts -->
							</div>
						</div><!-- row -->
					</div> <!-- contacts-content -->
				</div> 

			</div> <!-- wrap-contacts -->
		</div>

	</div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/contact_script.js') }}"></script>
@endpush
