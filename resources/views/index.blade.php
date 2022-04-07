@extends('_partials.main')

@section('main')
<main>
    <div class="container_one">
        <div class="left">
            <h2>Discover, find, <br>
                <span>Sell extraordinary</span> <br>
                Monster NFTs
            </h2>
            <h3>Marketplace For Monster Character Collections Non Fungible Token NFTs</h3>
            <div class="buttons">
                @auth
                    <button>Explore</button>
                    <a href="{{route('nfts.create')}}" class="create__btn">Create</a>
                    <a href="{{route('collections.create')}}" class="create__btn">Create Collection</a>
                @endauth
                @guest
                    <button>Explore</button>
                @endguest
            </div>
        </div>
        <div class="Right">

        </div>
    </div>
    <div class="container_two">
        <div class="tittle">
            <h2>Live Auctions</h2>
            <button>Explore more</button>
        </div>

        <div class="place_container">
                @foreach ($nft as $nft)

                    <div class="background">
                        <div class="image_container">
                            <img src="{{'/storage/'. $nft->image_src}}" class="img-">
                        </div>
                        <div class="text_one">
                            <h2>{{$nft->name}}</h2>
                            <span>BSC</span>
                        </div>
                        <div class="text_two">
                            <div class="div">
                                <div class="img_profile">
                                </div>
                                <div class="creator">
                                    <h2 class="name">Creator</h2>
                                    <h3>{{$nft->author->name}}</h3>
                                </div>
                            </div>
                            <div class="current">
                                <h2>Current Bid</h2>
                                <h3>{{$nft->price}} ETH</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
        <div class="auctions__scroll-container">
            <button class="auction__scroll-left">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.6667 7H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.83333 12.8337L1 7.00033L6.83333 1.16699" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            
            <span class="dots-parent">

            </span>

            <button class="auction__scroll-right">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 7H12.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.83301 1.16699L12.6663 7.00033L6.83301 12.8337" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>
    <div class="container_three">
        <div class="tittle">
            <h2>Top Seller</h2>
            <div class="button_arrow"> 
                <button>
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.444197 9.2196L9.34445 0.31951C9.5503 0.113495 9.8251 0 10.1181 0C10.4111 0 10.6859 0.113495 10.8918 0.31951L11.5472 0.974789C11.9737 1.40178 11.9737 2.09576 11.5472 2.52209L4.07344 9.99585L11.5555 17.4779C11.7613 17.6839 11.875 17.9586 11.875 18.2514C11.875 18.5446 11.7613 18.8192 11.5555 19.0254L10.9 19.6805C10.694 19.8865 10.4194 20 10.1264 20C9.83339 20 9.5586 19.8865 9.35274 19.6805L0.444197 10.7723C0.237857 10.5656 0.124525 10.2897 0.125175 9.99634C0.124525 9.70187 0.237857 9.4261 0.444197 9.2196Z" fill="white"/>
                    </svg>
                </button>
                <button>
                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5558 9.2196L2.65555 0.31951C2.4497 0.113495 2.1749 0 1.8819 0C1.58889 0 1.3141 0.113495 1.10824 0.31951L0.452802 0.974789C0.0263017 1.40178 0.0263017 2.09576 0.452802 2.52209L7.92656 9.99585L0.44451 17.4779C0.238658 17.6839 0.125 17.9586 0.125 18.2514C0.125 18.5446 0.238658 18.8192 0.44451 19.0254L1.09995 19.6805C1.30597 19.8865 1.5806 20 1.8736 20C2.16661 20 2.4414 19.8865 2.64726 19.6805L11.5558 10.7723C11.7621 10.5656 11.8755 10.2897 11.8748 9.99634C11.8755 9.70187 11.7621 9.4261 11.5558 9.2196Z" fill="#5142FC"/>
                    </svg>
                </button>
            </div>
        </div>
        <div class="profile">
            <div class="seller">
                <div class="img_profile_container">
                    <span><svg width="18" height="18" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <h2>Name</h2>
                <h3>ETH</h3>
            </div>

            <div class="seller">
                <div class="img_profile_container">
                    <span><svg width="18" height="18" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <h2>Name</h2>
                <h3>ETH</h3>
            </div>

            <div class="seller">
                <div class="img_profile_container">
                    <span><svg width="18" height="18" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <h2>Name</h2>
                <h3>ETH</h3>
            </div>

            <div class="seller">
                <div class="img_profile_container">
                    <span><svg width="18" height="18" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <h2>Name</h2>
                <h3>ETH</h3>
            </div>

            <div class="seller">
                <div class="img_profile_container">
                    <span><svg width="18" height="18" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <h2>Name</h2>
                <h3>ETH</h3>
            </div>

            <div class="seller">
                <div class="img_profile_container">
                    <span><svg width="18" height="18" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <h2>Name</h2>
                <h3>ETH</h3>
            </div>

            <div class="seller">
                <div class="img_profile_container">
                    <span><svg width="18" height="18" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <h2>Name</h2>
                <h3>ETH</h3>
            </div>

            <div class="seller">
                <div class="img_profile_container">
                    <span><svg width="18" height="18" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <h2>Name</h2>
                <h3>ETH</h3>
            </div>

            <div class="seller">
                <div class="img_profile_container">
                    <span><svg width="18" height="18" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                        </svg>
                    </span>
                </div>
                <h2>Name</h2>
                <h3>ETH</h3>
            </div>
        </div>
    </div>
    <div class="container_four">
        <div class="tittle">
            <h2>Today's Picks</h2>
            <button>Explore more</button>
        </div>
        <div class="place_container_two">
            <div class="background">
                <div class="image_container">

                </div>
                <div class="text_one">
                    <h2>Name</h2>
                    <span>BSC</span>
                </div>
                <div class="text_two">
                    <div class="div">
                        <div class="img_profile">

                        </div>
                        <div class="creator">
                            <h2>Creator</h2>
                            <h3 class="name">Name</h2>
                        </div>
                    </div>
                    <div class="current">
                        <h2>Current Bid</h2>
                        <h3>Numbers</h3>
                    </div>
                </div>
            </div>
        

        <div class="background">
            <div class="image_container">

            </div>
            <div class="text_one">
                <h2>Name</h2>
                <span>BSC</span>
            </div>
            <div class="text_two">
                <div class="div">
                    <div class="img_profile">

                    </div>
                    <div class="creator">
                        <h2>Creator</h2>
                        <h3 class="name">Name</h2>
                    </div>
                </div>
                <div class="current">
                    <h2>Current Bid</h2>
                    <h3>Numbers</h3>
                </div>
            </div>
        </div>

        <div class="background">
            <div class="image_container">

            </div>
            <div class="text_one">
                <h2>Name</h2>
                <span>BSC</span>
            </div>
            <div class="text_two">
                <div class="div">
                    <div class="img_profile">

                    </div>
                    <div class="creator">
                        <h2>Creator</h2>
                        <h3 class="name">Name</h2>
                    </div>
                </div>
                <div class="current">
                    <h2>Current Bid</h2>
                    <h3>Numbers</h3>
                </div>
            </div>
        </div>

    <div class="background">
        <div class="image_container">

        </div>
        <div class="text_one">
            <h2>Name</h2>
            <span>BSC</span>
        </div>
        <div class="text_two">
            <div class="div">
                <div class="img_profile">

                </div>
                <div class="creator">
                    <h2>Creator</h2>
                    <h3 class="name">Name</h2>
                </div>
            </div>
            <div class="current">
                <h2>Current Bid</h2>
                <h3>Numbers</h3>
            </div>
        </div>
    </div>

    <div class="background">
        <div class="image_container">

        </div>
        <div class="text_one">
            <h2>Name</h2>
            <span>BSC</span>
        </div>
        <div class="text_two">
            <div class="div">
                <div class="img_profile">

                </div>
                <div class="creator">
                    <h2>Creator</h2>
                    <h3 class="name">Name</h2>
                </div>
            </div>
            <div class="current">
                <h2>Current Bid</h2>
                <h3>Numbers</h3>
            </div>
        </div>
    </div>


<div class="background">
    <div class="image_container">

    </div>
    <div class="text_one">
        <h2>Name</h2>
        <span>BSC</span>
    </div>
    <div class="text_two">
        <div class="div">
            <div class="img_profile">

            </div>
            <div class="creator">
                <h2>Creator</h2>
                <h3 class="name">Name</h2>
            </div>
        </div>
        <div class="current">
            <h2>Current Bid</h2>
            <h3>Numbers</h3>
        </div>
    </div>
</div>

<div class="background">
    <div class="image_container">

    </div>
    <div class="text_one">
        <h2>Name</h2>
        <span>BSC</span>
    </div>
    <div class="text_two">
        <div class="div">
            <div class="img_profile">

            </div>
            <div class="creator">
                <h2>Creator</h2>
                <h3 class="name">Name</h2>
            </div>
        </div>
        <div class="current">
            <h2>Current Bid</h2>
            <h3>Numbers</h3>
        </div>
    </div>
</div>

<div class="background">
    <div class="image_container">

    </div>
    <div class="text_one">
        <h2>Name</h2>
        <span>BSC</span>
    </div>
    <div class="text_two">
        <div class="div">
            <div class="img_profile">

            </div>
            <div class="creator">
                <h2>Creator</h2>
                <h3 class="name">Name</h2>
            </div>
        </div>
        <div class="current">
            <h2>Current Bid</h2>
            <h3>Numbers</h3>
        </div>
    </div>
</div>
</div>
<div class="button_load">
    <button class="load">Load More</button>
</div>
    
</div>
<div class="container_five">
    <div class="tittle">
        <h2>Popular Collection</h2>
        <button>Explore more</button>
    </div>
    <div class="container_collection">
        <div class="background_collection">
            <div class="img_profile_container two">
                <span><svg width="10" height="8" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.28014 11.3408C6.13989 11.4818 5.94864 11.5605 5.74989 11.5605C5.55114 11.5605 5.35989 11.4818 5.21964 11.3408L0.985143 7.10553C0.545643 6.66603 0.545643 5.95353 0.985143 5.51478L1.51539 4.98453C1.95489 4.54503 2.66664 4.54503 3.10614 4.98453L5.74989 7.62828L12.8936 0.484532C13.3331 0.0450322 14.0456 0.0450322 14.4844 0.484532L15.0146 1.01478C15.4541 1.45428 15.4541 2.16678 15.0146 2.60553L6.28014 11.3408Z" fill="white"/>
                    </svg>
                </span>
            </div>
            <h2>Creative Art Collection</h2>
            <h3>Created by <span>name</span></h3>
            <div class="container_image_collection">
                <div class="image_one"></div>
                <div class="container_image_right">
                    <div class="right">
                        <div class="image_two">

                        </div>
                        <div class="image_three">

                        </div>
                    </div>
                    <div class="image_four">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
@endsection