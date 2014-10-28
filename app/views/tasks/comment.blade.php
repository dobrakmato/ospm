<div class="comment">
	<div class="comment-header">
		<h3 class="comment-author">{{ $comment->author()->displayName() }}</h3>
		<span class="comment-meta">{{ $comment->created_at() }}</span>
	</div>
	<div class="comment-body">
		<p>{{ $comment->content() }}</p>
	</div>
</div>