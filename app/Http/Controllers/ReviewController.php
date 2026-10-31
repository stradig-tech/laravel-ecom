<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display the Reviews List page.
     */
    public function index()
    {
        $reviews = [
            [
                'id' => 1,
                'country' => 'U.S.A',
                'date' => '21 December 2023',
                'comment' => 'I recently purchased a t-shirt that I was quite excited about, and I must say, there are several aspects that I really appreciate about it. Firstly, the material is absolutely wonderful.',
                'stars' => 5,
                'badge' => 'Excellent Quality',
                'author' => 'Michael B. Coch',
                'role' => 'Kaika Hill, CEO / Hill & CO',
                'avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=120&q=80',
            ],
            [
                'id' => 2,
                'country' => 'Canada',
                'date' => '16 March 2023',
                'comment' => 'I purchased a pair of jeans Firstly, the fabric is fantastic—it\'s both durable and comfortable. The denim is soft yet sturdy, making it perfect for everyday wear.',
                'stars' => 5,
                'badge' => 'Best Quality',
                'author' => 'Theresa T. Brose',
                'role' => 'Millenia Life, / General internist',
                'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=120&q=80',
            ],
            [
                'id' => 3,
                'country' => 'Germany',
                'date' => '23 October 2023',
                'comment' => 'The fit is perfect, hugging in all the right places while allowing for ease of movement. Overall, this dress exceeded my expectations and has quickly become a favorite in my wardrobe.',
                'stars' => 5,
                'badge' => 'Good Quality',
                'author' => 'James L. Erickson',
                'role' => 'Omni Tech Solutions / Founder',
                'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=120&q=80',
            ],
            [
                'id' => 4,
                'country' => 'Germany',
                'date' => '23 October 2023',
                'comment' => 'The fit is perfect, hugging in all the right places while allowing for ease of movement. Overall, this dress exceeded my expectations and has quickly become a favorite in my wardrobe.',
                'stars' => 5,
                'badge' => 'Good Quality',
                'author' => 'Lily W. Wilson',
                'role' => 'Grade A Investment / Manager',
                'avatar' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=120&q=80',
            ],
            [
                'id' => 5,
                'country' => 'Canada',
                'date' => '29 May 2023',
                'comment' => 'Additionally, the fit is perfect, providing great support and comfort for all day wear. These boots have quickly become a staple in my autumn outfit choices.',
                'stars' => 5,
                'badge' => 'Excellent Quality',
                'author' => 'Michael B. Coch',
                'role' => 'Kaika Hill, CEO / Hill & CO',
                'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=120&q=80',
            ],
            [
                'id' => 6,
                'country' => 'U.S.A',
                'date' => '18 August 2023',
                'comment' => 'The color is rich and vibrant, making it a standout piece in my wardrobe. Overall, this sweater has exceeded my expectations and has quickly become a cozy favorite.',
                'stars' => 5,
                'badge' => 'Best Quality',
                'author' => 'Theresa T. Brose',
                'role' => 'Millenia Life, / General internist',
                'avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=120&q=80',
            ],
            [
                'id' => 7,
                'country' => 'Iceland',
                'date' => '12 May 2023',
                'comment' => 'I ordered my usual size, but the shoes are either too small or too big, making them uncomfortable to wear. I would not recommend purchasing these unless.',
                'stars' => 5,
                'badge' => 'Good Quality',
                'author' => 'James L. Erickson',
                'role' => 'Omni Tech Solutions / Founder',
                'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=120&q=80',
            ],
            [
                'id' => 8,
                'country' => 'Arabic',
                'date' => '18 September 2023',
                'comment' => 'Firstly, the quality of the fabric is exceptional. It\'s soft, luxurious, and drapes beautifully, giving the dress an elegant and sophisticated look.',
                'stars' => 5,
                'badge' => 'Good Quality',
                'author' => 'Lily W. Wilson',
                'role' => 'Grade A Investment / Manager',
                'avatar' => 'https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=120&q=80',
            ],
        ];

        return view('admin.reviews.index', compact('reviews'));
    }
}
