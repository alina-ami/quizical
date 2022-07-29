<?php

namespace Database\Seeders;

use App\Models\Answer;
use Sentiment\Analyzer;
use Illuminate\Database\Seeder;
use DonatelloZa\RakePlus\RakePlus;
use PhpScience\TextRank\TextRankFacade;
use PhpScience\TextRank\Tool\StopWords\English;

class AnswersSeeder extends Seeder
{
    private $answers = [
        'I enjoyed and liked the merchandise I received. Good quality material.',
        'Because I love 99% of the pieces you send',
        'Because I like everything you guys send me❣️I love it love it❣️❣️❣️❤️',
        'Clothes are too expensive for a quality that I would consider to be less than good. Most of the items are weird cuts. It would take far too long to get a box that has items in it I actually want as opposed to keeping one or two items just to not have to pay the fee to return a poorly selected box. It would be much better if the stylist selected the items showed you their choices and then you could pick a color and size or just say don’t bother sending this.',
        'Disappointed that I don’t get anything that I request in my notes to the stylist. I now have had two times been charged for something I have returned. It’s a pain when this happens because of the process I have to go through to get a refund. I enjoy the products, but and get frustrated and contemplating quitting elite.',
        'The clothes I returned were in perfectly good condition and I got accused of damage plus send completely wrong sizes but I’m giving the company one more shot if they fail I will completely cancel from the company completely',
        'Because I love outline and I would like for my friends and family To enjoy like I do',
        'I reach put to company never no reply poor customer service ask for me to have signed when get box sent to wrong address sent to old address never recived box for 2cd time no call or email or nothing',
        'Everything i have gotten from adore me lingerie, bra sets, bathing suits & pjs, I love them all. If any issues you can return easily & shipping is quick',
        'I\'ve just been really surprised about the quality of the clothing. The lace isn\'t itchy or scratchy, its actually soft even after washing. My very first order was stolen off my front porch and an Adore Me representative gave me a code that allowed me to repurchase my item at no additional cost to me. It covered shipping and the cost of the item. That right there was beyond mind blowing to me. I couldn\'t believe a company would be that supportive, understanding and willing to help.',
        'I love that there are so many products to look at/choose from. The bras from adore me are offered in more sizes(30 B in particular) that you can\'t find any where else. Everything is so cute/sexy & very good quality.',
        'Terrible delivery service. They use UPS Innovations, takes forever with them delivering to the post office instead of just delivering. I\'ve asked them about this SEVERAL times & never get a answer. Thier standard replies. Customer service sucks.',
        'After spending hundreds of dollars at Adore me, I’m just not happy with most of this items I have purchased. I will never use some items again and that is a waste. I wish XS was available since small runs a bit bigger and is not always available. Also, I don’t think y’all post negative reviews on items, which is very wrong.',
        'Been sending a lot of selections back. Haven’t sent any swimwear. Probably going to cancel our program soon. However, the quality has been very good.',
        'It is very simple and if you have t Your sizing correct, you\'d get some very flattering pieces to buy and wear. It is so easy to return any pieces you don\'t want to buy and keep. Love it !!!',
        'I like how easy it is to skip a box for the month and to send things back. I sometimes have more money than other weeks, and I can allow myself to get 1 or 2 things that I know I will use. Other times every item seems to expensive and frivolous and I have to pay bills instead. Thanks for making it convenient!',
        'I keep majority of my items from each box. Why? Because I love them, and the service is great. I would refer you guys in a heartbeat 💓, in fact I already have. Keep up the great work!!',
        'I returned items. I tried on only bras. I got charged for products you say were ruined. Not fair. A question though. I got charged $40 but got nothing in return? If I damaged it it should probably be sent back……one cause I paid for it and 2 where have you ever sent me the item or a picture showing the “damage”. Sounds like a scam to me! I used this service once before with NO issues but……scam no recommendations!',
        'Even though the price is reasonable and quality material. The issue that when return the unwanted pieces somehow some don’t make it back and customer pays for them is a big no for me since it happened and I didn’t kept the items and had to pay.',
        'This is a complete scam. My wife signed up for this service and it was a mistake. She is never sent anything she would remotely like even after informing you of this. Every month she is charged the stylist fee plus an additional $20 fee for "dirty and damaged" merchandise. Funny how it became dirty and damaged when it was never removed from the shipping bag. This company is a RIP off. How you stay in business is a mystery to me.',
        'ADORE ME has great quality garments, delivery time is very good! The designs and colors are outstanding! We love everything we have received.',
        'I like the colors and different styles. If I had one suggestion, I wish more of your bras were wireless. The wires can be uncomfortable under the arms. Overall, I definitely would recommend. Service is great! Most of the time, I get my order within a few days of when I ordered.',
        'Your products are very good quality and your return policy is amazing. If it doesn\'t fit or you don\'t like the way it fits you can exchange for something else. Thanks',
        'Items take forrrreeevvveerrr to arrive, false promise times and deceptive emails make you THINK you can get items in a timely manner, but items are almost never on time. The items are nice and of good quality, but fit is hit or miss, sometimes I\'m a medium, sometimes I\'m a small, sometimes I\'m a large. Almost impossible to figure out what you\'ve ordered in the past, so you\'d better remember!',
        'I\'ve liked all of the items I\'ve purchased at first, but the quality in material is poor. I purchased a maternity nightgown and loved it at first, but after wearing for the second time the lavender color faded to light pink in weird patches across the waist and bust-line for no reason. I was very disappointed in the quality based on the price paid. The swimsuit I purchased last summer is cute and fun, and another nightgown I purchased is fine.',
        'I enjoyed and liked the merchandise I received. Good quality material.',
        'Because I love 99% of the pieces you send',
        'Because I like everything you guys send me❣️I love it love it❣️❣️❣️❤️',
        'Clothes are too expensive for a quality that I would consider to be less than good. Most of the items are weird cuts. It would take far too long to get a box that has items in it I actually want as opposed to keeping one or two items just to not have to pay the fee to return a poorly selected box. It would be much better if the stylist selected the items showed you their choices and then you could pick a color and size or just say don’t bother sending this.',
        'Disappointed that I don’t get anything that I request in my notes to the stylist. I now have had two times been charged for something I have returned. It’s a pain when this happens because of the process I have to go through to get a refund. I enjoy the products, but and get frustrated and contemplating quitting elite.',
        'The clothes I returned were in perfectly good condition and I got accused of damage plus send completely wrong sizes but I’m giving the company one more shot if they fail I will completely cancel from the company completely',
        'Because I love outline and I would like for my friends and family To enjoy like I do',
        'I reach put to company never no reply poor customer service ask for me to have signed when get box sent to wrong address sent to old address never recived box for 2cd time no call or email or nothing',
        'Everything i have gotten from adore me lingerie, bra sets, bathing suits & pjs, I love them all. If any issues you can return easily & shipping is quick',
        'I\'ve just been really surprised about the quality of the clothing. The lace isn\'t itchy or scratchy, its actually soft even after washing. My very first order was stolen off my front porch and an Adore Me representative gave me a code that allowed me to repurchase my item at no additional cost to me. It covered shipping and the cost of the item. That right there was beyond mind blowing to me. I couldn\'t believe a company would be that supportive, understanding and willing to help.',
        'I love that there are so many products to look at/choose from. The bras from adore me are offered in more sizes(30 B in particular) that you can\'t find any where else. Everything is so cute/sexy & very good quality.',
        'Terrible delivery service. They use UPS Innovations, takes forever with them delivering to the post office instead of just delivering. I\'ve asked them about this SEVERAL times & never get a answer. Thier standard replies. Customer service sucks.',
        'After spending hundreds of dollars at Adore me, I’m just not happy with most of this items I have purchased. I will never use some items again and that is a waste. I wish XS was available since small runs a bit bigger and is not always available. Also, I don’t think y’all post negative reviews on items, which is very wrong.',
        'Been sending a lot of selections back. Haven’t sent any swimwear. Probably going to cancel our program soon. However, the quality has been very good.',
        'It is very simple and if you have t Your sizing correct, you\'d get some very flattering pieces to buy and wear. It is so easy to return any pieces you don\'t want to buy and keep. Love it !!!',
        'I like how easy it is to skip a box for the month and to send things back. I sometimes have more money than other weeks, and I can allow myself to get 1 or 2 things that I know I will use. Other times every item seems to expensive and frivolous and I have to pay bills instead. Thanks for making it convenient!',
        'I keep majority of my items from each box. Why? Because I love them, and the service is great. I would refer you guys in a heartbeat 💓, in fact I already have. Keep up the great work!!',
        'I returned items. I tried on only bras. I got charged for products you say were ruined. Not fair. A question though. I got charged $40 but got nothing in return? If I damaged it it should probably be sent back……one cause I paid for it and 2 where have you ever sent me the item or a picture showing the “damage”. Sounds like a scam to me! I used this service once before with NO issues but……scam no recommendations!',
        'Even though the price is reasonable and quality material. The issue that when return the unwanted pieces somehow some don’t make it back and customer pays for them is a big no for me since it happened and I didn’t kept the items and had to pay.',
        'This is a complete scam. My wife signed up for this service and it was a mistake. She is never sent anything she would remotely like even after informing you of this. Every month she is charged the stylist fee plus an additional $20 fee for "dirty and damaged" merchandise. Funny how it became dirty and damaged when it was never removed from the shipping bag. This company is a RIP off. How you stay in business is a mystery to me.',
        'ADORE ME has great quality garments, delivery time is very good! The designs and colors are outstanding! We love everything we have received.',
        'I like the colors and different styles. If I had one suggestion, I wish more of your bras were wireless. The wires can be uncomfortable under the arms. Overall, I definitely would recommend. Service is great! Most of the time, I get my order within a few days of when I ordered.',
        'Your products are very good quality and your return policy is amazing. If it doesn\'t fit or you don\'t like the way it fits you can exchange for something else. Thanks',
        'Items take forrrreeevvveerrr to arrive, false promise times and deceptive emails make you THINK you can get items in a timely manner, but items are almost never on time. The items are nice and of good quality, but fit is hit or miss, sometimes I\'m a medium, sometimes I\'m a small, sometimes I\'m a large. Almost impossible to figure out what you\'ve ordered in the past, so you\'d better remember!',
        'I\'ve liked all of the items I\'ve purchased at first, but the quality in material is poor. I purchased a maternity nightgown and loved it at first, but after wearing for the second time the lavender color faded to light pink in weird patches across the waist and bust-line for no reason. I was very disappointed in the quality based on the price paid. The swimsuit I purchased last summer is cute and fun, and another nightgown I purchased is fine.',
        'I have not been impressed with quality or selection. Bathing suit was great, nightgown was comfortable but bra and panty sets have been of poor quality and selection.',
        'It\'s a great company you have for the most part great products I just wish it was a little easier to deal with refunds and with personal mistakes',
        'I returned my elite box for July and unfortunately you your company has taken the money for the elite box out of my account and still has not replaced it back into my account',
        'I love getting different stuff to try out. It’s nice to also get some stuff I wouldn’t have even tried on. And I’ve already told others about this service.',
        'The product(s) are awesome. Delivery time is awesome as well. If any delays you are notified immediately. I have no complaints at all!!!!!',
        'Great selection, great promotions, reliable shipping even to Canada. Wife has fallen in love with your products and they are all she wants now.',
        'I love that it’s so many different styles, so many different sizes and doesn’t feel like I get pressured to have a subscription that traps me. The returning for a different size was intimidating but it worked out in the end. Would be better if I knew my size before buying like fifty of the cute bras. I also would like it if there wasn’t a penalty for returns and don’t wants. They was why it wasn’t a 10/10.',
        'I love Adore Me products but I won\'t get them in a timely manner. Three times I\'ve ordered new underwear for my vacation and three times my order was extremely late. I always try to order a month out.',
        'I always at least love it to things sometimes the whole box but also the customer service is very efficient and seems to get my styles right',
        'I enjoyed receiving the monthly subscription box. There’s fun variety. The sizing is good and the quality is nice and I think the pricing is fair',
        'I love the variety of items I receive monthly. Such cute styles and colors. And the quality is also great. Actually, my only issue is that sometimes I get duplicate items that I\'ve already purchased in the past. But other than that, it\'s my favorite monthly subscription I\'ve ever done.',
        'Love the different styles',
        'The quality of the items are crap. I emailed before about not getting my box back soon enough because I was out of town and never got a response. I’ve been charged almost $400 for a box that I did not keep and I just have to take your word for it that I am going to be refunded with no restocking fee. Nothing outside of the bras ever fit.',
        'I just recommended Adore Me to 2 friends recently! Products are always good quality and customer service has been fantastic any time I have issues.',
        'Adore Me has amazing customer service and amazing products. I have bought a few Bra and Panty sets for my wife. They are true to size and great quality and super cute and sexy. All around great company',
        'I have yet to receive one item (I\'ve ordered and received AT LEAST 15 items) and all are PERFECT! Well made, true to size, and ADORABLE! So many compliments on the swim suits especially! Love them!!',
        'Product quality is just ok, very slow and high cost delivery. And The return is not satisfied, expensive & slow. I can find the same or better prices product on Amazon which 2day shipping and free return.',
        'I love the quality and sometimes I make it a surprise when I open the box. Most of the time I love everything until I see the style and try it on my body.',
        'This gives couples something fun and exciting to look forward to wether at home or traveling. This is something I enjoy to share with my wife.',
        'Where else could you try on sexy and romantic items in the privacy of your home? I do a modeling show for my husband and no one can see but us.',
        'The return process and how it works is not clear from the beginning. How long it takes to learn if returns are acceptable or not. Your should have the option of purchasing these items that were refused. It took months to get a box of only bra/panties/lingerie despite me always thumbing down other items.',
        'I love the clothing. I told my aunt about my sets and she even made a purchase. I speak very highly about the quality of my sets and the prices. I have talked about ut so much my daughter started getting sets too.',
        'The variety of lingerie is outstanding. And the fit is great. Best underwear I have ever worn. Very comfortable and each item I’ve purchased has made me feel good about myself; sexy; playful. The “girls” are very happy!',
        'Because the process of ordering, payment, and delivery were very easy. The items were delivered very rapidly and exchange was so easy. I now have too lovely bathing suits for the summer. The sizes are great!',
        'The price of the item I bought and it is not returnable which I did not know and my wife doesn’t even like it therefore she won’t try it on.',
        'The subscription and garments are reasonably priced. Returning the unwanted items is easy. And as a plus size woman it’s hard to find reasonably priced anything that also makes me feel sexy. Ordering from the elite box has taken out the “oh I could never pull that off” element because I feel like I should at least try everything on. I now own way more lingerie that I feel confident in than ever before.',
        'I absolutely love my elite boxes and so convenient to be delivered to your door. The sets I’ve received are so up to date clothing and intimate sets keep your life spiced up and make you feel amazing',
        'I hate to go shopping especially for lingerie and underwear. Now I get to do it from the comfort of my home. Something doesn’t fit or I don’t like I just ship it back. Most importantly I can do all this on my time which I seem to have very little of lately.',
        'Sign up for a subscription and the company would randomly withdraw money from my attached credit card. $20, $40 ,$60 $170 without any warning which caused problems with my card and other bills. Stuff was cheap and fit poorly. Would not recommend to anyone.',
        'I have loved everything I’ve gotten from Adore Me. The one time I picked something that wasn’t the right size, it was super easy to send back. I’ve stopped sleeping in tattered oversized tank tops and now feel sexy when I’m in my “pajamas”.',
        'Adore Me has many sizes that a lot of other sites do not carry other sites advertise plus size availability but really do not carry sizes a lot of plus size women need and Adore Me does',
        'Love the styles. Always wanted a collection of pretty bras. Love how you get a matching panty for the price. So I get to build both as a collection. Bra sizes are tricky. All bra sizes don’t fit the same.',
        'Nothing fits right. Everything I want is always out of stock. Example: I ordered 2 bra and panties and I was informed a day or two later that I wouldn’t receive one set because it was sold out. I ordered something else from your guidelines and when I received it, neither one fit. They are both too big. I don’t have a way to print out a return shipment label , tags are still on so I ate the purchase. I won’t be ordering again or recommend you to anyone.Love the quality of your clothes',
        'It\'s styled just for me. I have time to try on and choose at my convenience.',
        'Good quality clothing. And i don\'t have to leave my house',
        'Don’t like you making me pay for something I return to the post office to return back to you. I return the items because I didn’t want the items, they were ugly ti me. I don’t want to do business with your company anymore. Thanks',
        'It’s great! You pick your own styles and size and the box is dropped off at your door and anything you don’t want you send back at no cost to you and anything I wanna keep I pay for. Plus I get to try the clothes on first before I purchase.',
        'I love a supprise from myself it reminds me I love me. Many different types of things to try. Good materials.sexy always.essy return good pricing',
        'I love my Elite box. It gives me the choices and styles that I like. I also get to try things on and see how they fit before I purchase them. All while being delivered to my home.',
        'You sent the wrong sizes the first time, and when I put the correct sizing info in, the second box had no changes made to the sizing. Basically takes out and feel of "personalized" service. I\'ll be cancelling the subscription, because even if you guys make mistakes on sizing or style preference, I\'d still have to pay $20 for no products.',
        'Products tho a little expensive are made well wife loves them Service is quick with delivery and customer service not too bad You allow me too put a little into account and can hold out if need be Over all good experience',
        'Wonderful product, great fits, new styles, user friendly app, prompt shipping. Discount codes and offers can get confusing but overall adore me is the way to go.',
        'Overall every experience in ordering is easy and the products we receive a quality product. Also enjoy VIP membership with the buy 5 get a set free.',
        'All of the styles I like are always sold out in my size. I have had multiple orders process only to be notified that the item I ordered was sold out and they were giving me a store credit instead of just refunding my card. Also had an order arrive only to find out one of the items I ordered was not there and was not notified that it was out of stock. I checked the order details and it was marked as shipped.',
        'Painful return process. Codes didn’t work the first time. Then the order I placed was actually out of stock and I had to get another code. The voucher is only good for one item and I think that’s absurd.',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->answers as $answer) {
            Answer::factory()->create([
                'answer' => $answer,
                'sentiment' => $this->getTextSentiment($answer),
                'keywords' => $this->getTextKeywords($answer),
                'summary' =>  $this->getTextSummary($answer),
            ]);
        }
    }

    private function getTextKeywords(string $text): array
    {
        return RakePlus::create($text)->get();
    }

    private function getTextSentiment(string $text): array
    {
        $sentimentAnalyzer = new Analyzer();

        return $sentimentAnalyzer->getSentiment($text);
    }

    private function getTextSummary(string $text): array
    {
        $api = new TextRankFacade();
        $stopWords = new English();
        $api->setStopWords($stopWords);

        return $api->summarizeTextBasic($text);
    }
}
