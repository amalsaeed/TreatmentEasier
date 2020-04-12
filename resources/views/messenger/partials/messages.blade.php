@if ($message->user->id == Auth::user()->id)
<li  class="right clearfix"><span class="chat-img pull-right">
<img src="http://placehold.it/50/55C1E7/fff&text={{ $message->user->name[0] }}" alt="{{ $message->user->name }}" class="img-circle" />
</span>
    <div class="chat-body clearfix">
        <div class="header">
            <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>{{ $message->created_at->diffForHumans() }}</small>
            <strong class="pull-right primary-font">{{ $message->user->name }}</strong>
        </div>
        <p>
           {{ $message->body }}
        </p>
    </div>
</li>
@else
<li class="left clearfix"><span class="chat-img pull-left">
<img src="http://placehold.it/50/55C1E7/fff&text={{ $message->user->name[0] }}" alt="{{ $message->user->name }}"
    class="img-circle" />
</span>
    <div class="chat-body clearfix">
        <div class="header">
            <strong class="primary-font">{{ $message->user->name }}</strong> <small class="pull-right text-muted">
                <span class="glyphicon glyphicon-time"></span>{{ $message->created_at->diffForHumans() }}</small>
        </div>
        <p>
          {{ $message->body }}
        </p>
    </div>
</li>
@endif
