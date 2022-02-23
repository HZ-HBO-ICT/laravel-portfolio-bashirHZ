<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            [
                'question' => 'Q: How can you print a document from your laptop at HZ?',
                'answer' => 'Some Answer',
                'link' => 'https://print.hz.nl'
            ], [
                'question' => 'Q: How can you scan a document a send it to your laptop at HZ?',
                'answer' => 'Some Answer',
                'link' => ''
            ], [
                'question' => 'Q: What do you need to do when you are sick / show symptoms of coronavirus?',
                'answer' => 'Some Answer',
                'link' => ''
            ], [
                'question' => 'Q: How can you book a project space in one of the wings?',
                'answer' => 'Some Answer',
                'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=f56d5230-ffe5-4ab7-ad47-ec9374b5ec34'
            ], [
                'question' => 'Q: What are the instructions if you want to park your car at the HZ parking lot?',
                'answer' => 'Some Answer',
                'link' => ''
            ]
            ]);
    }
}
