<?php

use Illuminate\Database\Seeder;
use App\Media;

class MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		# Array of author data to add
		$medias = [
			['Harry Potter and the Sorcerers Stone', '1', '1', 'https://images-na.ssl-images-amazon.com/images/I/51HSkTKlauL._SX346_BO1,204,203,200_.jpg','https://www.amazon.com/Harry-Potter-Sorcerers-Stone-Rowling/dp/059035342X/ref=sr_1_1?crid=1NJ4FZ7ICZ7SY&keywords=harry+potter+scorcerer%27s+stone+book&qid=1551301343&s=gateway&sprefix=harry+potter+scor%2Caps%2C857&sr=8-1', '2'],
			['Let’s Explore Diabetes with Owls', '2', '2', 'https://images-na.ssl-images-amazon.com/images/I/41boA-KjlwL._SX331_BO1,204,203,200_.jpg', 'https://www.amazon.com/gp/product/0316154709?imprToken=Jc0OIbACcb5QH9DhXVlQFw&slotNum=1&ie=UTF8&camp=1789&creativeASIN=0316154709&linkCode=xm2&tag=bustle621-20', '2' ],
			['Where’d You Go, Bernadette', '3', '3', 'https://images-na.ssl-images-amazon.com/images/I/41jZQywZjHL._SY346_.jpg', 'https://www.amazon.com/Whered-You-Go-Bernadette-Novel-ebook/dp/B006L8942U?_bbid=64666&tag=unrecognizedsite-20', '2'],
			['The Perks of Being a Wallflower', '4', '4', 'https://images-na.ssl-images-amazon.com/images/I/41pwDQ15SrL._SX353_BO1,204,203,200_.jpg', 'https://www.amazon.com/Perks-Being-Wallflower-Stephen-Chbosky/dp/0671027344?creativeASIN=0671027344&linkCode=w50&tag=self01b-20&imprToken=sBgJst-tbW44J7J9TJD9IQ&slotNum=3', '2'],
			['Me Talk Pretty One Day', '2', '5', 'https://images-na.ssl-images-amazon.com/images/I/41vIEie4W8L._SX331_BO1,204,203,200_.jpg', 'https://www.amazon.com/Me-Talk-Pretty-One-Day/dp/0316776963/ref=sr_1_3?creativeASIN=0316776963&linkCode=w50&tag=self01b-20&imprToken=sBgJst-tbW44J7J9TJD9IQ&slotNum=7&s=books&ie=UTF8&qid=1516295057&sr=1-3&keywords=me%20talk%20pretty%20one%20day', '2'],
			['Not off to a good start', '5', '1', 'http://comicskingdom.com/system/top_ten_comics/images/1752/original-Marvin.20140109.jpg?1545422074', '', '1'],
			['Zits Nov', '6', '2', 'https://safr.kingfeatures.com/idn/ck3/content.php?file=aHR0cDovL3NhZnIua2luZ2ZlYXR1cmVzLmNvbS9aaXRzLzIwMTgvMTEvWml0cy4yMDE4MTExMF8xNDQwLmdpZg==', '', '1'],
			['Master of the Universe', '7', '3', 'http://phdcomics.com/comics/archive/phd113007s.gif', '', '1'],
			['Peanuts', '8', '5', 'https://www.fluentu.com/blog/english/wp-content/uploads/sites/4/2018/07/learning-english-through-comics-1.png', '', '1'],
			['Zits Sept', '6', '4', 'https://safr.kingfeatures.com/idn/cnfeed/zone/js/content.php?file=aHR0cDovL3NhZnIua2luZ2ZlYXR1cmVzLmNvbS9aaXRzLzIwMTkvMDIvWml0cy4yMDE5MDIyN185MDAuZ2lm', '', '1'],
			['Natural', '9', '1', '', 'https://www.youtube.com/embed/0I647GU3Jsc', '3'],
			['Happier', '10', '2', '', 'https://www.youtube.com/embed/m7Bc3pLyij0', '3'],
			['Thunder', '9', '3', '', 'https://www.youtube.com/embed/fKopy74weus', '3'],
			['Believer', '9', '4', '', 'https://www.youtube.com/embed/7wtfhZwyrcc', '3'],
			['Glory', '11', '5', '', 'https://www.youtube.com/embed/zxJCMOMx550', '3'],
			['The Angry Birds Movie', '12', '1', 'https://images-na.ssl-images-amazon.com/images/I/91rMkwYeWPL._SX342_.jpg', 'https://www.amazon.com/Angry-Birds-Movie-Blu-ray/dp/B01EK44M64/ref=sr_1_6?keywords=the+angry+birds+movie&qid=1551321606&s=gateway&sr=8-6', '4'],
			['The Iron Giant', '13', '2', 'https://images-na.ssl-images-amazon.com/images/I/51CD4VDQHQL._SY445_.jpg', 'https://www.amazon.com/Iron-Giant-Special-Eli-Marienthal/dp/B00009M9BK/ref=sr_1_4?keywords=iron+giant+movie&qid=1551321479&s=gateway&sr=8-4', '4'],
			['Inside Out', '14', '3', 'https://images-na.ssl-images-amazon.com/images/I/51lwAufa7KL._SY445_.jpg', 'https://www.amazon.com/Inside-Out-1-Disc-DVD-Poehler/dp/B013FAF96G/ref=sr_1_4?keywords=inside+out+movie&qid=1551321103&s=gateway&sr=8-4', '4'],
			['The Emoji Movie', '12', '4', 'https://images-na.ssl-images-amazon.com/images/I/91EXvcYtRJL._SY445_.jpg', 'https://www.amazon.com/Emoji-Movie-James-Corden/dp/B0746ZDXSP/ref=sr_1_6?keywords=emoji+movie&qid=1551321379&s=gateway&sr=8-6', '4'],
			['Sing', '15', '5', 'https://images-na.ssl-images-amazon.com/images/I/81WxsdkPYrL._SY445_.jpg', 'https://www.amazon.com/Sing-Matthew-McConaughey/dp/B01LTI0P24/ref=sr_1_3?keywords=sing+movie&qid=1551321277&s=gateway&sr=8-3', '4']

		];
		$count = count($medias);

		# Loop through each author, adding them to the database
		foreach ($medias as $mediaData) {
			$media = new Media();

			$media->created_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$media->updated_at = Carbon\Carbon::now()->subDays($count)->toDateTimeString();
			$media->title = $mediaData[0];
			$media->author_id = $mediaData[1];
			$media->mood_id = $mediaData[2];
			$media->cover = $mediaData[3];
			$media->url = $mediaData[4];
			$media->type_id = $mediaData[5];


			$media->save();
			//$media->media()->sync($mediaData[0]);
			$count--;
		}
    }
}
