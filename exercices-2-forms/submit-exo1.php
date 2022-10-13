<?php

$userName = $_POST['name'];

$userAddress = $_POST['address'];

$userCity = $_POST['city'];

$userZipcode = $_POST['zipcode'];

$isValid = false;

if (
    empty($userName) ||
    empty($userAddress) ||
    empty($userCity) ||
    empty($userZipcode)
) {
    $isValid = false;
} else {
    $isValid = true;
}

?>

<?php if ($isValid) : ?>
    <table>
        <thead>
            <td>NAME</td>
            <td>ADDRESS</td>
            <td>CITY</td>
            <td>ZIPCODE</td>
        </thead>
        <tbody>
            <td><?php echo $userName ?></td>
            <td><?php echo $userAddress ?></td>
            <td><?php echo $userCity ?></td>
            <td><?php echo $userZipcode ?></td>
        </tbody>
    </table>
<?php endif ?>


<?php if (!$isValid) : ?>
<p>Don't mess with my code, punk!</p>
<a href="https://www.youtube.com/watch?v=GXFSK0ogeg4">go to hell</a>
<?php endif ?>
