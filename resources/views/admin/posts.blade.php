@extends('admin.index')

@push('style')
<link rel="stylesheet" type="text/css" href="{{ asset('css/admin-posts.css') }}"/>
@endpush

@section('content')
<div class="container-fluid content">
	<div class="row">
		<div class="col-12 mt-3 mb-5">
			<div class="adminPosts">
				<h3 class="title-pages m-0 text-center ">Administrer les cas cliniques</h3>

				<table class="listPosts table-responsive-md">
					<thead>
						<tr>
							<th>Auteur</th>
							<th>Titre</th>
							<th>Description</th>
							<th>Date</th>
							<th>Gestion</th>
						</tr>
					</thead>
					<tbody>
						@forelse ($posts as $post)
							<tr>
								<td>{{ $post->autor->first_name }} {{ $post->autor->last_name }}</td>
								<td class="clippingText_3">
									<a href="{{ url('/admin/post-info/' . $post->id) }}">{{ $post->title }}</a>
								</td>
								<td class="listPosts__textPost clippingText_4">{{ $post->description }}</td>
								<td class="listPosts__data">{{ $post->created_at }}</td>
								<td class="listPosts__icons" data-id_post={{$post->id}}>
									<i class="fa fa-times-circle" aria-hidden="true"></i>
									@if (!$post->post_approve) <i class="fa fa-check-circle" aria-hidden="true"></i> @endif
								</td>
							</tr>
						@empty
							<tr>
								<td colspan="5">Not posts</td>
							</tr>
						@endforelse
					</tbody>
				</table>

				{{ $posts->links() }}

				</div> <!-- adminPosts -->
			</div>
		</div>
	</div>
	@endsection

	@push('scripts')
	<script type="text/javascript" src="{{ asset('js/admin-posts.js') }}"></script>
	@endpush