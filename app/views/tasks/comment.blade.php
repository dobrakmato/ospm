<div class="list-group-item">
	<div class="row-action-primary">
		<i class="mdi-file-folder"></i>
	</div>
	<div class="row-content">
		<div class="action-secondary"><i class="icon-material-info"></i></div>
		<div class="least-content">{{ $comment->created_at }}</div>
		<h4 class="list-group-item-heading">{{ $comment->author()->getResults()->displayname }}</h4>
		<p class="list-group-item-text">{{ $comment->content }}</p>
	</div>
</div>
<div class="list-group-separator"></div>