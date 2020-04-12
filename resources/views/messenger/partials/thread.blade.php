
<?php $class = $thread->isUnread(Auth::id()) ? 'alert-info' : ''; ?>

<div  class="list list-row block {{ $class }}">


      <div class="list-item" data-id="17">

        <div><a href="#" data-abc="true"><span class="w-48 avatar gd-warning">{{$thread->creator()->name[0]}}</span>
        </a></div>

<h4 class="media-heading">
    <a href="{{ route('messages.show', $thread->id) }}">
   {{ $thread->subject }}
   </a>
    ({{ $thread->userUnreadMessagesCount(Auth::id()) }})</h4>

        <div class="flex">
            <div>
            <span> Last Message: {{ $thread->latestMessage->body }}</span>
            <div class="item-except">
               <p>  Creator:  {{ $thread->creator()->name }} - Participant:  {{ $thread->participantsString(Auth::id()) }}</p>
            </div>
            </div>
        </div>

    </div>

</div>

