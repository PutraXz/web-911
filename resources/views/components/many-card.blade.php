@php
    $datas = $datas = [
        ['title' => 'Humble','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(5).png '],
        ['title' => 'Responsible','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(6).png '],
        ['title' => 'Serious','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(7).png '],
        ['title' => 'Care','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(8).png '],
        ['title' => 'Trust','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(9).png '],
        ['title' => 'Integrity','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(10).png '],
        ['title' => 'Honest','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(11).png '],
        ['title' => 'Comitment','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(12).png '],
        ['title' => 'Loyalty','text' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.','img' =>  'images/image(13).png ']

    ];
@endphp
<div class="my-5">
    <div class="container">
        <h1 class="text-center">9 Prinsip Nino</h1>
            <div class="row pt-5">
                <?php foreach ( $datas as $data) : ?>
                    <div class="col-4 pt-4">
                        <div class="card" >
                            <img src="{{$data['img']}}" alt="Card image cap" style=" width:279px; height:241px; margin: 0 40px">
                            <div class="card-body">
                                <h3 class="card-title" style="margin: 42px 40px 18px 40px"><b>{{$data['title']}}</b></h3>
                                <p class="card-text" style="margin: 0 40px 72px 40px">{{$data['text']}}</p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </div>
</div>
