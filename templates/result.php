<?php

namespace Challenge10\templates\Pages;

use App\Calculator\AdditionCalculator;
use App\EasySolution\Solution;

require_once __DIR__ . '/../../vendor/autoload.php';

$additionCalculator = new AdditionCalculator();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $answerNumber = (int) $_POST['answer-number'];
    $answerNumber = $additionCalculator->addTwo($answerNumber);
    // PLEASE DO NOT UNCOMMENT THIS, OR YOU WILL RUIN EVERYTHING
    // $easySolution = new Solution();
    // $answerNumber = $easySolution->bugFix($answerNumber - 2);
    $numberTwo = $_POST['number-two'];
} else {
    $answerNumber = '(Stop making GET requests on this page';
    $numberTwo = 'GET a life instead)';
}
$isBugged = ($answerNumber !== $numberTwo); // This will return false once the bug is fixed
$linkingWord = 'don\'t make';
$message = $answerNumber == 2 ? 'Why don\'t you try Xdebug? &#129488;' : 'We believe in you, you will get the right answer.';
$finalEmoji = $answerNumber == 2 ? '129327' : '129300';
if (!$isBugged) {
    $linkingWord = 'equals';
    $message = '&#129395; Xdebug was certainly a bit overkill to solve this &#129395;';
    $finalEmoji = '128526';
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Docker and Xdebug</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <?php include '_components/templates-nav.php' ?>
        <div class="container">
            <h1 class="my-4">2 + 2 = 4 ?</h1>
            <div style="font-size: larger">
                <p>
                    <?= sprintf("%s + %s %s 4 &#%s;", $answerNumber, $numberTwo, $linkingWord, $finalEmoji); ?>
                </p>
                <p>
                    <?= $message; ?>
                </p>
            </div>

            <?php
            if ($isBugged && $answerNumber == 2) {
                $randomHint = [
                    'It\'s time to use Xdebug',
                ];
                echo '<p>Open PhpStorm and add a breakpoint in <code>templates/result.php</code>, line 2</p>';
            } else {
                $randomHint = [
                    '<span style="font-size: 24px">&#9996;</span> (count the fingers)',
                    '<span style="font-size: 24px">&#129304;</span> (count the fingers)',
                    'add two fingers to <span style="font-size: 24px">&#9994;</span> , then convert the number of fingers to an integer, then enter the result in the form using the keyboard of your computer, then press enter.',
                    'how many hands does this man have? <span style="font-size: 24px">&#129335;</span>',
                    'how many legs does this man probably have? <span style="font-size: 24px">&#129335;</span>',
                    'how many paperclips do you count? <span style="font-size: 24px">&#128391;</span>',
                    'what is Justin trying to tell you? <iframe src="https://giphy.com/embed/3ohs4nfkkEISkmIteE" width="480" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/justintimberlake-justin-timberlake-3ohs4nfkkEISkmIteE"></a></p>',
                    '<iframe src="https://giphy.com/embed/sBMXoZcUpbHn110sw6" width="480" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/Massivesci-bye-peace-two-sBMXoZcUpbHn110sw6"></a></p>',
                    '<iframe src="https://giphy.com/embed/xTiN0h0Kh5gH7yQYUw" width="480" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/thebachelor-episode-7-abc-xTiN0h0Kh5gH7yQYUw"></a></p>',
                    '<iframe src="https://giphy.com/embed/m9jFnJOoQ3hWJ6Muaa" width="480" height="260" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/dazn-usa-twice-pep-guardiola-m9jFnJOoQ3hWJ6Muaa"></a></p>',
                    'on how many wheels is this car going? <iframe src="https://giphy.com/embed/DlXbiu2ZgpHlC" width="480" style="" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p><a href="https://giphy.com/gifs/car-like-DlXbiu2ZgpHlC"></a></p>',
                ];
            }
            if ($isBugged) {
                echo '
                        <h2 class="mb-3">Try again</h2>
                        <form action="./result.php" method="post">
                            <div class="mb-3">
                                <label for="answer-number" class="form-label">What number should you add to 2 in order to make 4?</label>
                                <div id="numberHelp" class="form-text mb-3">New hint: '.$randomHint[array_rand($randomHint)].'</div>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control-sm" name="answer-number" id="answer-number" required>
                            </div>
                            <div>
                                <input hidden type="number" name="number-two" id="number-two" value="2">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-dark">Submit</button>
                            </div>
                        </form>';
            } ?>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
