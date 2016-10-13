<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#master-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="/home">{{config('app.name')}}</a>
    </div>
    <div class="collapse navbar-collapse" id="master-navbar">
      <ul class="nav navbar-nav">
        <li class="{{$activeNav == 'home'? "active" : ""}}"><a href="home">Home</a></li>
        <li class="{{$activeNav == 'qualifications'? "active" : ""}}"><a href="qualifications">Qualifications</a></li>
        <li class="{{$activeNav == 'pseudonymes'? "active" : ""}}"><a href="pseudonymes">Pseudonymes</a></li>
        <li class="{{$activeNav == 'trivia'? "active" : ""}}"><a href="trivia">Trivia</a></li>
        <li class="{{$activeNav == 'whatvotingmeans'? "active" : ""}}"><a href="whatvotingmeans">What Voting Means</a></li>
        <li class="{{$activeNav == 'howtovote'? "active" : ""}}"><a href="howtovote">How To Vote</a></li>
        <li class="{{$activeNav == 'merchandise'? "active" : ""}}"><a href="merchandise">Merchandise</a></li>
      </ul>
    </div>
  </div>
</nav>