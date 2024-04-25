
<?php

declare(strict_types = 1);

class SuperHero {
   
    public function __construct (readonly private string $name, public string $city, public array $powers){}

    public function show_all(){
        return get_object_vars($this);
    }

    public function attack (){
        return "FOR $this->city!!!!!";
    }

    public function description (){
        $powers = implode(", ", $this->powers);
        return "My name is $this->name, and I am from $this->city. My super powers are $powers";
    }

    public static function random (){
        $names = ["Thor", "Wolverin", "Spiderman", "Panther" ];
        $cities = ["Queens", "Kripton", "Asgard", "Wakanda", "X-Men Mansion"];
        $superpowers = [["Fly", "Superpunch", "Invicibility", "Intelligence"], ["Eat a lot", "Cry", "Change size", "Super Jump"], ["Elasticness", "Super vomit", "Dance", "Kill"], ["Spear", "Tornado", "Magic", "Love"]];

        $name = $names[array_rand($names)];
        $citie = $cities[array_rand($cities)];
        $superpower = $superpowers[array_rand($superpowers)];

        echo "The random Super Hero is $name, from $citie with the following powers: ".implode(", ", $superpower)."<br/>";

    }

}

$batman = new SuperHero("Batman", "Gotham", ["Strength", "Speed", "Intelligence"]);
echo $batman->attack()."<br/>";
echo $batman->description()."<br/>";
SuperHero::random();
SuperHero::random();
SuperHero::random();
