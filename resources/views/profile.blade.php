@extends('layout2')

@section('title')
    <h1>Wie ben ik?</h1>
    <span class="byline">Mauris vulputate dolor sit amet nibh</span>
@endsection

@section ('content')

    <img src="https://i.imgur.com/8B0NrRe.jpg" id="rgb-border" width="45%" height="45%" alt="PC"
    style="float:right; margin: 5%; margin-top: -1%; border-radius: 10px;">
  <p>Hey, ik ben Pascal en ik studeer momenteel HBO-ICT op de HZ. Ik game graag, kijk veel Twitch en ben eigenlijk
    altijd wel achter mijn computer te vinden. Deze website heb ik voor een schoolopdracht gemaakt en zal ik in de loop
    van het jaar aanpassen en aanvullen.</p>

  <div style="margin:2%;">
    <ul>Iets over mijzelf:
      <p></p>
      <li>
        <ul>Dingen waar ik goed in ben:
          <li class="lijst">Vervelende opmerkingen</li>
          <li class="lijst">Werk uitstellen tot het laatste moment</li>
          <li class="lijst">Videospelletjes spelen</li>
          <p></p>
        </ul>
      </li>

      <li>
        <ul>Dingen waar ik niet goed in ben:
          <li class="lijst">Coderen</li>
          <li class="lijst">Optijd naar bed gaan</li>
          <li class="lijst">Wiskunde</li>
          <p></p>
        </ul>
      </li>
      <li>
        <ol>Mijn 2 favorieten dingen zijn:
          <li class="lijst">Computeren</li>
          <li class="lijst">Slapen (wanneer ik daar aan toe kom)</li>
        </ol>
      </li>
    </ul>
  </div>
  <div id="steam">
    <a target=_blank href="https://steamcommunity.com/id/lordpas3"> <img
        src="https://image.flaticon.com/icons/png/512/3/3782.png" alt="Steam" width="30px" height="30px"> </a>
  </div>

@endsection
