<?php
class NotificationsController extends AdminController {
	public function ajax() {
		return "<center><small>refreshed " . date("H:i:s") . "</small></center><hr><b>Title one</b><p>Nice long text blah blah blah about nothing.</p><br/><b>Title one</b><p>Nice long text blah blah blah about nothing.</p><br/>";
	}
}