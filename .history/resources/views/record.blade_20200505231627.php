@extends('topbar')

@section('title', 'Top 10')
@section('jumbotext', 'Top 10')

@section('content')

<div class="container" style="padding:5px;">

        <div class="row" >
            
            <h3>Top Goalscorers 19/20</h3>
            <table class="table table-striped">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Player</th>
                    <th scope="col">Team</th>
                    <th scope="col">Goals(Apps)</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ciro Immobile </td>
                    <td> Lazio</td>
                    <td>27 (54)</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Robert Lewandowski</td>
                    <td>Bayern Munich</td>
                    <td>25 (50)</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Cristiano Ronaldo</td>
                    <td>Juventus</td>
                    <td>21 (44)</td>
                  </tr>
                  <th scope="row">4</th>
                  <td> Erling Haaland</td>
                  <td>Red Bull Salzburg/Borussia Dortmund</td>
                  <td>25 (42)</td>
                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>Timo Werner</td>
                  <td>RB Leipzig</td>
                  <td>21 (42)</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>Lionel Messi</td>
                  <td>Barcelona</td>
                  <td>19 (38)</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>Jamie Vardy</td>
                  <td>Leicester City</td>
                  <td>19 (38)</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>Kylian Mbappe</td>
                  <td>PSG</td>
                  <td>18 (36)</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Wissam Ben Yedder</td>
                  <td>Monaco</td>
                  <td>18 (36)</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>Pierre-Emerick Aubameyang</td>
                  <td>Arsenal</td>
                  <td>17 (34)</td>
                </tr>
                </tbody>
              </table>
           
  
    </div>

    <div class="row" >
            
      <h3>Top 10 Assists 19/20</h3>
      <table class="table table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Player</th>
              <th scope="col">Team</th>
              <th scope="col">Assists(Apps)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Kevin De Bruyne</td>
              <td>Manchester City</td>
              <td>16</td>
            </tr>
            <tr>
              <th scope="row">...</th>
              <td>Thomas Müller</td>
              <td>Bayern München</td>
              <td>16</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jadon Sancho</td>
              <td>Dortmund</td>
              <td>15</td>
            </tr>
            <tr>
              <th scope="row">3</th>
                  <td>Ángel Di María</td>
                  <td>PSG</td>
                  <td>14</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td>Trent Alexander-Arnold</td>
                  <td>Liverpool</td>
                  <td>12</td>
                </tr>
                <tr>
                  <th scope="row">...</th>
                  <td>Lionel Messi</td>
                  <td>Barcelona</td>
                  <td>12</td>
                </tr>
                <tr>
                  <th scope="row">...</th>
                  <td>Luis Alberto</td>
                  <td>Lazio</td>
                  <td>12</td>
                </tr>
                <tr>
                  <th scope="row">...</th>
                  <td>Christopher Nkunku</td>
                  <td>Leipzig</td>
                  <td>12</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
          </tbody>
        </table>
     

</div>

  

</div>
@endsection
