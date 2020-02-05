@extends('layout2')

@section('title')
    <h1>Mijn dashboard</h1>
    <span class="byline">Mauris vulputate dolor sit amet nibh</span>
@endsection

@section ('content')

    <div class="rechts">
        <div class="nbsa">
            <h1>NBSA</h1>
            <p>Ik heb nu 0/45 studiepunten die ik minimaal nodig heb om</p>
            <p>door te gaan naar het volgende studiejaar</p>
        </div>
        <div class="studiewijzer">
            <h1>Studiewijzer</h1>
            <p> <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen">Het Onderwijs
                    en Examenregelement (OER)</a> </p>
            <p> <a
                    href="https://hz.nl/uploads/documents/Regelingen/OERS/2018-2019/9.-HBO-ICT-vt-Uitvoeringsregeling-HZ-2018%E2%80%932019-V02.pdf">Uitvoeringsregeling
                    HBO-ICT 2018-2019</a> </p>
            <p> <a href="https://learn.hz.nl/">Learn.hz</a> </p>
            <p> <a
                    href="https://teams.microsoft.com/_#/school/conversations/General?threadId=19:2e2afa0286b04932be16cb8ad2d9d2c0">Teams
                    HBO-ICT Eerstejaars</a> </p>
            <p> <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus">Studievoortgang</a> </p>
            <p> <a href="https://github.com/HZ-HBO-ICT">HZ HBO-ICT Github</a> </p>
        </div>
    </div>
    <div>
        <?php
        echo '<table>';
        echo '<tr>
                <th>Cursus</th>
                <th>Toets</th>
                <th>Weging</th>
                <th>EC</th>
                <th>Cijfer</th>
            </tr>';

        $grades = DB::table('grades')->get();


        foreach ($grades as $grade) {
//            dump($grade->subject);
            echo "<tr>
                    <td>$grade->subject</td>
                    <td>$grade->test</td>
                    <td>$grade->weight</td>
                    <td>$grade->ec</td>
                    <td>$grade->grade</td>
                    </tr>";
        }

        echo '</table>';
        ?>
    </div>
@endsection
