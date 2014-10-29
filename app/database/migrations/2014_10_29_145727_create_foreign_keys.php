<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('projects', function(Blueprint $table) {
			$table->foreign('leader_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('role_id')->references('id')->on('roles')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('metadata_id')->references('id')->on('metadatas')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->foreign('project_id')->references('id')->on('projects')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->foreign('category_id')->references('id')->on('tasks_categories')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->foreign('author_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->foreign('assignedto_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->foreign('milestone_id')->references('id')->on('milestones')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tasks_comments', function(Blueprint $table) {
			$table->foreign('task_id')->references('id')->on('tasks')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('tasks_comments', function(Blueprint $table) {
			$table->foreign('author_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('documents', function(Blueprint $table) {
			$table->foreign('author_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('author_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->foreign('thread_id')->references('id')->on('messages_threads')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('surveys', function(Blueprint $table) {
			$table->foreign('project_id')->references('id')->on('projects')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('surveys_elements', function(Blueprint $table) {
			$table->foreign('survey_id')->references('id')->on('surveys')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('surveys_responses', function(Blueprint $table) {
			$table->foreign('survey_id')->references('id')->on('surveys')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('projects', function(Blueprint $table) {
			$table->dropForeign('projects_leader_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_role_id_foreign');
		});
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_metadata_id_foreign');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->dropForeign('tasks_project_id_foreign');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->dropForeign('tasks_category_id_foreign');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->dropForeign('tasks_author_id_foreign');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->dropForeign('tasks_assignedto_id_foreign');
		});
		Schema::table('tasks', function(Blueprint $table) {
			$table->dropForeign('tasks_milestone_id_foreign');
		});
		Schema::table('tasks_comments', function(Blueprint $table) {
			$table->dropForeign('tasks_comments_task_id_foreign');
		});
		Schema::table('tasks_comments', function(Blueprint $table) {
			$table->dropForeign('tasks_comments_author_id_foreign');
		});
		Schema::table('documents', function(Blueprint $table) {
			$table->dropForeign('documents_author_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_author_id_foreign');
		});
		Schema::table('messages', function(Blueprint $table) {
			$table->dropForeign('messages_thread_id_foreign');
		});
		Schema::table('surveys', function(Blueprint $table) {
			$table->dropForeign('surveys_project_id_foreign');
		});
		Schema::table('surveys_elements', function(Blueprint $table) {
			$table->dropForeign('surveys_elements_survey_id_foreign');
		});
		Schema::table('surveys_responses', function(Blueprint $table) {
			$table->dropForeign('surveys_responses_survey_id_foreign');
		});
		Schema::table('notifications', function(Blueprint $table) {
			$table->dropForeign('notifications_user_id_foreign');
		});
	}
}