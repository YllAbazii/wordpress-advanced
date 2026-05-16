<?php include 'header.php'; ?>

<h1>Popular Games</h1>

<?php
$games = [
    [
        "title" => "Fortnite",
        "content" => "A fast-paced battle royale game with building mechanics."
    ],
    [
        "title" => "EA Sports FC 26",
        "content" => "A realistic football game where you can play with top teams."
    ],
    [
        "title" => "Call of Duty",
        "content" => "A popular shooting game with multiplayer action."
    ],
];

foreach ($games as $game) {
    echo "<h3>" . $game['title'] . "</h3>";
    echo "<p>" . $game['content'] . "</p>";
}
?>

<?php include 'footer.php'; ?>