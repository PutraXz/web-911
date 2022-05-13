@php
    $datas = $datas = [
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(12).png ', 'margin' => '0 20px 0 0;'],
        ['title' => 'Lorem Ipsum','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(12).png ', 'margin' => '0 !important;']

    ];
@endphp

<div class="my-5">
    <div class="container pt-5">
        <h1 class="text-center">Fasilitas Nino</h1>
        <div class="row pt-5">
            <?php foreach ( $datas as $data) : ?>
                <div class="col-3">
                    <div class="card vw-70 h-100" >
                        <img src="{{$data['img']}}" alt="Card image cap" class="vw-30">
                        <div class="card-body">
                            <h3 class="card-title" style="margin: 2rem 1rem ">{{$data['title']}}</h3>
                            <p class="card-text" style="margin: 1vh 2.5vh">{{$data['text']}}</p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
