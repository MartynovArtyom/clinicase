@extends('social.index')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style-chat.css') }}"/>
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
            <div class="row wrap-chat">
                <div class="col-lg-12">
                    <h3 class="title-pages m-0 text-center ">Chat</h3>
                </div>
                <div class="col-lg-12 chat">

                    <div class="content-chat">

                        {{--<p class="time-post">il y a 23 jours</p>--}}

                        {{--@foreach ($messages as $key => $message)--}}
                            {{--<div class="chat {{ $message->autor_id == Auth::user()->id ? 'chat-right' : 'chat-left' }}" data-autor_id="{{ $message->autor_id }}">--}}
                                {{--<div class="wrap-avatar-content">--}}
                                    {{--<div class="chat-avatar">--}}
                                        {{--<img class="rounded-circle avatar-img" src="{{ asset('images/uploads/avatars/'. $message->autor->image) }}" alt="preview-profil">--}}
                                    {{--</div>--}}
                                    {{--<div class="wrap-chat-text">--}}
                                        {{--<div class="chat-text" id="message-{{ $message->id }}" data-message_id="{{ $message->id }}">--}}
                                            {{--<p class="text-message">{{ $message->message }}</p>--}}
                                            {{--<p class="time-message">{{ $message->created_at }}</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}

                        {{--<div class="chat chat-left">--}}
                            {{--<div class="wrap-avatar-content">--}}
                                {{--<div class="chat-avatar">--}}
                                    {{--<img class="rounded-circle avatar-img" src="{{ asset('images/avatar1.png' )}}" alt="preview-profil">--}}
                                {{--</div>--}}
                                {{--<div class="wrap-chat-text">--}}
                                    {{--<div class="chat-text">--}}
                                        {{--<p class="text-message">Voici votre message test test test test test test test test test test test test test test test</p>--}}
                                        {{--<p class="time-message">20:20</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="chat-text">--}}
                                        {{--<p class="text-message">Voici votre message test test test test test</p>--}}
                                        {{--<p class="time-message">20:45</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="chat chat-right">--}}
                            {{--<div class="wrap-avatar-content">--}}
                                {{--<div class="chat-avatar">--}}
                                    {{--<img class="rounded-circle avatar-img" src="{{ asset('images/avatar1.png' )}}" alt="preview-profil">--}}
                                {{--</div>--}}
                                {{--<div class="wrap-chat-text">--}}
                                    {{--<div class="chat-text">--}}
                                        {{--<p class="text-message">test test test test test test test test test test test test test test test</p>--}}
                                        {{--<p class="time-message">20:50</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="chat-text">--}}
                                        {{--<p class="text-message">test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test test </p>--}}
                                        {{--<p class="time-message">20:55</p>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div> <!-- content-chat -->

                    <div class="chat-app-form form-group">
                        <div class="chat-app-textarea">
                            <form class="mb-0 set-message" method="POST" action="{{ url('/chat/' . $receiver_id) }}">
                                <textarea name="message" class="form-control" id="textarea-message" rows="3" required></textarea>
                                <button type="submit" class="btn-chat-submit btn btn-primary mb-2">Send</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- col-lg-12 -->
            </div> <!-- wrap-chat -->
        </div>

    </div>
</div>
@endsection

@push('scripts')
    <script type="text/javascript">
        receiver_id = {{ $receiver_id }};
    </script>

    <script type="text/javascript" src="{{ asset('js/chat_script.js') }}"></script>
@endpush
