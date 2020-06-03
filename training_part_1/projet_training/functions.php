<?php
function nav_item(string $lien, string $title, string $linkClass = ''): string
{
    $classe = 'nav-item';
    if ($_SERVER['SCRIPT_NAME'] === $lien) {
        $classe = $classe .  ' active';
    }
    return '<li class="' . $classe . '">
                    <a class="' . $linkClass . '" href="' . $lien . '">' . $title . '</a>
                </li>';
}

function nav_menu(string $linkClass): string
{
    return
        nav_item('/home.php', 'Acceuil', $linkClass) .
        nav_item('/contact.php', 'Contact', $linkClass) .
        nav_item('/one-page-cv.php', 'About me', $linkClass);
    }
function nav_menu_one_page(string $linkClass): string
{
    return
        nav_item('#section-one', 'Acceuil', $linkClass) .
        nav_item('#section-two', 'Contact', $linkClass) .
        nav_item('#section-three', 'About me', $linkClass).
        nav_item('#section-four', 'toto', $linkClass) .
        nav_item('#section-five', 'tata', $linkClass);
    }

function checkbox(string $name, string $value, array $data): string
{

    $attributes = '';
    if (isset($data[$name]) && in_array($value, $data[$name])) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
}
function radio(string $name, string $value, array $data): string
{

    $attributes = '';
    if (isset($data[$name]) && $value === $data[$name]) {
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="{$name}" value="$value" $attributes>
HTML;
}

function select(string $name, $value, array $options): string 
{
    $html_options = [];
    foreach($options as $k => $option){
        $attributes = $k == $value ? ' selected' : '';
        $html_options[] = "<option value='$k' $attributes>$option</option>";
        
    }

return "<select class='form-control' name='$name'>" . implode($html_options) . "</select>";
}

function dump($variable)
{
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}

function creneaux_html(array $creneaux)
{
    if(empty($creneaux)){
        return 'Fermé';
    }else{
        $phrases = [];
        foreach ($creneaux as $creneau ) {
            $phrases[] =  "Ouvert de <strong>{$creneau[0]}</strong>h à <strong>{$creneau[1]}h</strong>";
        }
        return implode(' et ', $phrases);
    }
}

function in_creneaux(int $heure, array $creneaux): bool
{
    foreach($creneaux as $creneau){
        $debut = $creneau[0];
        $fin = $creneau[1];
        if($heure >= $debut && $heure < $fin){
            return true;
        }
    }
    return false;

}

