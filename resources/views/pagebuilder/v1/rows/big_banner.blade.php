<?php
$class = '';
$style = '';

if(
    isset($row['settings']['background_color']) and
    empty($row['settings']['background_image'])
) {
    if(strpos($row['settings']['background_color'], '#') !== false) {
        switch($row['settings']['background_color']) {
            case '#cc181e':
                $class = 'red';
                break;

            case '#eee':
                $class = 'grey';
                break;

            case '#6441a4':
                $class = 'purple';
                break;

            default:
                $class = 'white';
                break;
        }
    } else {
        $class = $row['settings']['background_color'];

        if($class == 'custom') {
            $style = 'background-color: ' . $row['settings']['background_color_code'];
        }
    }
} elseif(!empty($row['settings']['background_image'])) {
    $style = 'background-image:url(' . $row['settings']['background_image'] . '); background-size:cover;';
}
?>

<div class="container-fluid  big_banner_row {{$class}}" style="{{$style}}">
    <div class="container">

        @include('pagebuilder.v1.rows.row_loop', [
            'disable_padding' => true
        ])

    </div>
</div>