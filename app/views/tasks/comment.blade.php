 @if(empty($comment->type) )
	<div class="well bs-component">
		<h4 class="list-group-item-heading">
			{{ $comment->author()->getResults()->displayname }} <small>{{
				$comment->created_at }}</small>
		</h4>
	<p class="list-group-item-text">{{ $comment->content }}</p>
	</div>
	@elseif($comment->type == "resolved")
	<div class="alert alert-success">
		Task has been resolved by <strong>{{ $comment->author()->getResults()->displayname }}</strong>. ({{ $comment->content }}) <br />
		<small>{{ $comment->created_at }}</small>
	</div>
	@elseif($comment->type == "assigned")
	<div class="alert alert-info">
		Task has been assigned to <strong>{{ $comment->content }}</strong>.<br />
		<small>{{ $comment->created_at }}</small>
	</div>
	@elseif($comment->type == "closed")
	<div class="alert alert-danger">
		Task has been closed by <strong>{{ $comment->author()->getResults()->displayname }}</strong>. ({{ $comment->content }}) <br />
		<small>{{ $comment->created_at }}</small>
	</div>
	@else
	<div class="well bs-component">
		<h4 class="list-group-item-heading">
			{{ $comment->author()->getResults()->displayname }} <small>{{
				$comment->created_at }}</small>
		</h4>
		<p class="list-group-item-text">{{ $comment->content }}</p>
	</div>
	@endif