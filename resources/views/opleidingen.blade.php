@include('header')

<div>
    <form class="modal-content" method="post" action="{{URL::to('store ')}}" style="position: absolute; bottom: 10px; padding: 25px; margin: 70px; margin-bottom: 300px; background-color: #1e1e1e; height: 48%; padding-top: 1px ">
        <h1 style="font-size: 30px">Create a Account</h1>
        <label style="font-size: 25px; margin-left: 20px">Username </label><br>
        <input placeholder="Example : BobisAwesome" type="text" name="name" value="">
               <br>
        <label style="font-size: 25px; margin-left: 20px">Email </label><br>
        <input placeholder="Example : Bob@Awesome.com" type="text" name="email" value="">
                <br>
        <label style="font-size: 25px; margin-left: 20px">Password </label><br>
        <input  placeholder="Example : Bob123"type="password" name="password" value="">
        <br>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <button class="button2" type="submit" name="button">Register</button>
        <br>



    </form>
</div>