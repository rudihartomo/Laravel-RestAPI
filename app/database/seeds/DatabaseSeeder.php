<?php

class DatabaseSeeder extends Seeder {

	private $tables = [
	'lessons',
	'tags',
	'users',
	'lesson_tag'
	];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		/*DB::statement('SET FOREIGN_KEY_CHECKS=0');
		Lesson::truncate();
		User::truncate();
		Tag::truncate();
		DB::table('lesson_tag')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1');*/
		$this->cleanDatabase();

		
		Eloquent::unguard();

		$this->call('LessonsTableSeeder');
		$this->call('UsersTableSeeder');		
		$this->call('TagsTableSeeder');
		$this->call('LessontagTableSeeder');
	}

	private function cleanDatabase(){
		DB::statement('SET FOREIGN_KEY_CHECKS=0');
		
		foreach ($this->tables as $tableName) {
			DB::table($tableName)->truncate();
		}

		DB::statement('SET FOREIGN_KEY_CHECKS=1');
	}
}
