<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert(array(
        	['title' => 'Parasite',
        	'synopsis' => 'Greed and class discrimination threaten the newly formed symbiotic relationship between the wealthy Park family and the destitute Kim clan.',
        	'rating' => '8.6',
        	'poster' => 'https://i0.wp.com/www.socialnews.xyz/wp-content/uploads/2019/08/14/parasite-movie-HD-posters-and-stills-5.jpg?quality=90&zoom=1&ssl=1',
        	'review' => 'This is a well written and well perfomed original film. With a lot of repetitive cinema these day i felt this was something new. I felt connected and engaged with the character throughout the film. There are several well directed tense moments throughout the film. A popular topic of class struggled well portrayed. Its always nice to see foreign language films having worldwide success',
        	'news' => 'Oscar-winning South Korean movie Parasite has achieved another milestone by becoming the highest-grossing non-English language film in the UK.

					The winner of the best picture Oscar has taken a total of £11.5m at the box office since its release on 7 February.

					Its success ends the reign of The Passion of the Christ, which had held the top spot with £11.1m since 2004.

					Bong Joon Ho black comedy made history as the first international film to win the best picture Oscar.

					It won four Oscars overall at this years event, also taking home the famous statuettes for best director, best international film and best original screenplay.

					The film is a vicious social satire about two families from different classes in Seoul - one who live in poverty in a semi-basement, and another who live in a large home in an affluent area.

					The story revolves around the poor familys plans to infiltrate the life and home of the much wealthier one.</p><br>
					 It opened in the UK later than in other countries and was able to take full advantage of the buzz created by its Academy Awards success.

					On its opening weekend in the the UK, Parasite made £1.4m in the run-up to the Oscars, which took place on 9 February.

					It climbed to the second spot in the UK the following week after it was expanded from 137 cinemas to 428 sites and increased its takings by 133%.</p><br>
					Globally, the film has grossed $257m (£197m) so far, with more than $50m (£38m) of that total coming from the US.

					The film has enjoyed the biggest post-Oscar boost for a best picture winner in the past decade. '
        	],


        	['title' => 'Searching',
        	'synopsis' => 'David Kim becomes desperate when his 16-year-old daughter, Margot, disappears and an immediate police investigation leads nowhere. He soon decides to search the one place that no one else has: Margot laptop. Hoping to trace her digital footprints, David contacts her friends and looks at photos and videos for any possible clues to her whereabouts.',
        	'rating' => '7.6',
        	'poster' => 'https://www.wwnytv.com/resizer/8kNPIC0rQ10CVzSlSVfS0M4Bs4Q=/1200x600/arc-anglerfish-arc2-prod-raycom.s3.amazonaws.com/public/DUQMVAZFTBBZNMOS5GIKE4EUOA.jpg',
        	'review' => 'This film got it right in the technology department. All real websites, technology and actual examples of how you can search the internet to find information. They had to get this right and as an avid tech enthusiastic i was pleased that they did. The storyline was well written, had twists and turns that i did not expect. Decent movie!',
        	'news' => 'The thriller starring John Cho Searching is getting a sequel. Telling the story of a father’s frantic and increasingly desperate search for his daughter, the movie was a surprise hit. It went on to gross over $75 million by the end of its theatrical release against a budget of just one million.

				Released in 2018, Searching distinguished itself by taking place entirely on screens: phone screens, computer screens, television screens, etc. The film takes the framing device of the horror franchise Unfriended and uses it to enhance a different and far more grounded terror: the panic that a parent would feel if one of their children suddenly went missing. Initially optimistic, refusing to believe the worse, David Kim (Cho) soon relies on the help of a detective (Debra Messing) to find his teenage daughter. Cho was praised for his gradually paranoid portrayal and the film is notable, in its early moments, for the subtle exploration of how the internet has evolved from something that can bring a family together to later serving as the excuse for them drifting apart.

				Now, as reported by Deadline, a Searching sequel is in development. While the original creative team of director Aneesh Chaganty and his co-writer Sev Ohanian are slated to return, the plot will revolve around a new cast of characters who have to solve a mystery that will play out entirely from the perspective of a screen. No specific date was given for the sequel’s release or whether any actors might reprise their roles from the first film. On Twitter, Chaganty confirmed the sequel and the new storyline.

				In an interview with Screen Rant, Chaganty spoke about his reluctance to do a film that relied so heavily on technology. The director explained the movie had such a concept-driven story. If he could not execute his vision in a way that felt fresh, he said, then he wasn’t sure about doing it at all. By all accounts, Chaganty succeeded in his hopes of marrying the technique with the narrative. Other than its unexpected achievement at the box office, Searching was met with glowing reviews that praised the film for conveying so much emotion with little more than Cho’s performance as a guide.

				As for the sequel, with its details yet to be ironed out, it could take a cue from the second entry in the Unfriended franchise. The first film was elevated by its unique framing device, but it was a typical tale of unlikable characters being killed off in quick fashion. The second outing, Dark Web, flipped expectations by making the protagonists quite sympathetic and upping the level of cruelty. The Searching sequel could surprise viewers in a similar manner, by being a complete departure from its predecessor.'
        	],


        	['title' => 'Five Feet Apart',
        	'synopsis' => 'Seventeen-year-old Stella spends most of her time in the hospital as a cystic fibrosis patient. Her life is full of routines, boundaries and self-control -- all of which get put to the test when she meets Will, an impossibly charming teen who has the same illness. Theres an instant flirtation, though restrictions dictate that they must maintain a safe distance between them. As their connection intensifies, so does the temptation to throw the rules out the window and embrace that attraction.',
        	'rating' => '7.2',
        	'poster' => 'https://coolmomscooltips.com/wp-content/uploads/2019/03/five-feet-apart-movie-poster-cool-moms-cool-tips-min-e1552425291796.jpeg',
        	'review' => 'A wonderfully written story, played by such talented actors. The little details that make it just that little bit more intense. The right expressions that make it just that little bit more touching. The right words that make just that much of a difference. I held my breath through the whole movie, waiting for it to go wrong. I felt so immersed in the characters, and their stories. Their pain, their longing, their restrictions, they hit me right in the heart. And if that isnt a sign of a good, emotional movie, I dont know what is.',
        	'news' => 'Five Feet Apart is a romantic drama about two teenagers who suffer from a genetic disease falling in love in a hospital.</p> <p>Directed by Justin Baldoni the story is based on the novel Five Feet Apart by Rachael Lippincott.
				Stella (Haley Lu Richardson) suffers from B. Cepacia and receives treatment at the Saint Grace Hospital. On her personal YouTube channel, she shares her story and information regarding her disease with the rest of the world. Since her lungs are at only 50 percent function bacteria from other B. Cepacia patients could kill her. Therefore, she must stay 6 feet away from other sick people, never being able to touch or hug her best friend Poe, who is also receiving treatment at the hospital.

				A new patient Will (Cole Sprouse) arrives. Handsome and always cracking sarcastic jokes, he is lazy and does not follow his treatment regime. Control freak Stella starts supporting him, so they begin taking their meds together via video chats.

			 Since Stellas sickness has taken so much from her life she decides to steal something back: 1 foot. After finding a billiard cue that is exactly 5 feet long the teenagers go on their first date. With the characters finally being able to connect and almost touch each other, at least the end of the cue, the audience becomes aware of the importance of touch.

				The story is not only about their love, but also fear of loss, unexpected death, trust, lungs, lights and the fact that their love could kill them one day. Cole is a romantic, and wins Stellas heart by drawing pictures of her and giving her other surprises.

				Still, the story follows the typical Hollywood scheme: two people that at first do not like each other fall in love and when everything seems to be perfect there is a big emotional drama. Whether the movies end is a happy one is all a question of perspective.

				Still, its message is clear: Life’s too short to waste a second. (sop/kes)
				 ']));
    }
}
