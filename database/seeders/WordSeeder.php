<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Word;
use Illuminate\Database\Seeder;

class WordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $animalCategory = Category::firstWhere('name', 'animal');
        $animalData = [
            [
                'name' => 'ant',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'anteater',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'armadillo',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'baboon',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'badger',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'bear',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'beaver',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'bee',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'bird',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'bull',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'calf',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'camel',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'cat',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'cheetah',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'chicken',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'chimpanzee',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'cow',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'crane',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'crocodile',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'deer',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'dinosaur',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'dog',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'dolphin',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'donkey',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'duck',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'eagle',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'elephant',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'fish',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'flamingo',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'fly',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'fox',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'frog',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'giraffe',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'goat',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'goldfish',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'gorilla',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'hamster',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'hippopotamus',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'horse',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'hyena',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'jaguar',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'kangaroo',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'kitten',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'ladybug',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'leopard',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'lion',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'lizard',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'llama',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'lobster',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'mammoth',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'monkey',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'mosquito',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'narwhal',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'octopus',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'ostrich',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'otter',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'owl',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'oyster',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'panda',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'panther',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'parrot',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'peacock',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'pelican',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'penguin',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'pig',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'pigeon',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'porcupine',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'puppy',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'rabbit',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'raccoon',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'rat',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'reindeer',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'rhinoceros',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'rooster',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'scorpion',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'seagull',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'seahorse',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'seal',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'shark',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'sheep',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'shrimp',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'snail',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'snake',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'spider',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'squid',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'squid',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'squirrel',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'starfish',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'stork',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'swan',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'tadpole',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'tiger',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'toad',
                'category_id' => $animalCategory->id,
            ],
            ['name' => 'tropical fish', 'category_id' => $animalCategory->id],
            [
                'name' => 'tuna',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'turkey',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'turtle',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'vulture',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'walrus',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'whale',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'wolf',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'zebra',
                'category_id' => $animalCategory->id,
            ],
            [
                'name' => 'pitbull',
                'category_id' => $animalCategory->id,
            ],
        ];
        $countryCategory = Category::firstWhere('name', 'country');
        $countryData = [
            ['name' => 'China', 'category_id' => $countryCategory->id],
            ['name' => 'Africa', 'category_id' => $countryCategory->id],
            ['name' => 'America', 'category_id' => $countryCategory->id],
            ['name' => 'Bahamas', 'category_id' => $countryCategory->id],
            ['name' => 'Brazil', 'category_id' => $countryCategory->id],
            ['name' => 'Canada', 'category_id' => $countryCategory->id],
            ['name' => 'Egypt', 'category_id' => $countryCategory->id],
            ['name' => 'England', 'category_id' => $countryCategory->id],
            ['name' => 'Finland', 'category_id' => $countryCategory->id],
            ['name' => 'France', 'category_id' => $countryCategory->id],
            ['name' => 'Germany', 'category_id' => $countryCategory->id],
            ['name' => 'Greece', 'category_id' => $countryCategory->id],
            ['name' => 'Hawaii', 'category_id' => $countryCategory->id],
            ['name' => 'Holland', 'category_id' => $countryCategory->id],
            ['name' => 'India', 'category_id' => $countryCategory->id],
            ['name' => 'Iran', 'category_id' => $countryCategory->id],
            ['name' => 'Ireland', 'category_id' => $countryCategory->id],
            ['name' => 'Israel', 'category_id' => $countryCategory->id],
            ['name' => 'Italy', 'category_id' => $countryCategory->id],
            ['name' => 'Jamaica', 'category_id' => $countryCategory->id],
            ['name' => 'Japan', 'category_id' => $countryCategory->id],
            ['name' => 'Mexico', 'category_id' => $countryCategory->id],
            ['name' => 'Morocco', 'category_id' => $countryCategory->id],
            ['name' => 'North Korea', 'category_id' => $countryCategory->id],
            ['name' => 'Pakistan', 'category_id' => $countryCategory->id],
            ['name' => 'Russia', 'category_id' => $countryCategory->id],
            ['name' => 'Saudi Arabia', 'category_id' => $countryCategory->id],
            ['name' => 'Scotland', 'category_id' => $countryCategory->id],
            ['name' => 'South Korea', 'category_id' => $countryCategory->id],
            ['name' => 'Spain', 'category_id' => $countryCategory->id],
            ['name' => 'Syria', 'category_id' => $countryCategory->id],
            ['name' => 'Taiwan', 'category_id' => $countryCategory->id],
            ['name' => 'Thailand', 'category_id' => $countryCategory->id],
            ['name' => 'Turkey', 'category_id' => $countryCategory->id],
            ['name' => 'Vietnam', 'category_id' => $countryCategory->id],
        ];
        $locationCategory = Category::firstWhere('name', 'location');
        $locationData = [
            ['name' => 'airport', 'category_id' => $locationCategory->id],
            ['name' => 'apartment building', 'category_id' => $locationCategory->id],
            ['name' => 'bank', 'category_id' => $locationCategory->id],
            ['name' => 'barber shop', 'category_id' => $locationCategory->id],
            ['name' => 'barn', 'category_id' => $locationCategory->id],
            ['name' => 'book store', 'category_id' => $locationCategory->id],
            ['name' => 'bowling alley', 'category_id' => $locationCategory->id],
            ['name' => 'bus stop', 'category_id' => $locationCategory->id],
            ['name' => 'casino', 'category_id' => $locationCategory->id],
            ['name' => 'castle', 'category_id' => $locationCategory->id],
            ['name' => 'cathedral', 'category_id' => $locationCategory->id],
            ['name' => 'church', 'category_id' => $locationCategory->id],
            ['name' => 'circus', 'category_id' => $locationCategory->id],
            ['name' => 'convenience store', 'category_id' => $locationCategory->id],
            ['name' => 'courthouse', 'category_id' => $locationCategory->id],
            ['name' => 'department store', 'category_id' => $locationCategory->id],
            ['name' => 'disco', 'category_id' => $locationCategory->id],
            ['name' => 'fire department', 'category_id' => $locationCategory->id],
            ['name' => 'fire station', 'category_id' => $locationCategory->id],
            ['name' => 'gas station', 'category_id' => $locationCategory->id],
            ['name' => 'hospital', 'category_id' => $locationCategory->id],
            ['name' => 'house', 'category_id' => $locationCategory->id],
            ['name' => 'library', 'category_id' => $locationCategory->id],
            ['name' => 'lighthouse', 'category_id' => $locationCategory->id],
            ['name' => 'mall', 'category_id' => $locationCategory->id],
            ['name' => 'mansion', 'category_id' => $locationCategory->id],
            ['name' => 'movie theater', 'category_id' => $locationCategory->id],
            ['name' => 'museum', 'category_id' => $locationCategory->id],
            ['name' => 'office building', 'category_id' => $locationCategory->id],
            ['name' => 'opera house', 'category_id' => $locationCategory->id],
            ['name' => 'palace', 'category_id' => $locationCategory->id],
            ['name' => 'petshop', 'category_id' => $locationCategory->id],
            ['name' => 'police station', 'category_id' => $locationCategory->id],
            ['name' => 'post office', 'category_id' => $locationCategory->id],
            ['name' => 'prison', 'category_id' => $locationCategory->id],
            ['name' => 'restaurant', 'category_id' => $locationCategory->id],
            ['name' => 'saw mill', 'category_id' => $locationCategory->id],
            ['name' => 'school', 'category_id' => $locationCategory->id],
            ['name' => 'supermarket', 'category_id' => $locationCategory->id],
            ['name' => 'temple', 'category_id' => $locationCategory->id],
            ['name' => 'theater', 'category_id' => $locationCategory->id],
            ['name' => 'train station', 'category_id' => $locationCategory->id],
        ];
        $clothingCategory = Category::firstWhere('name', 'clothing');
        $clothingData = [
            ['name' => 'bandana', 'category_id' => $clothingCategory->id],
            ['name' => 'belt', 'category_id' => $clothingCategory->id],
            ['name' => 'bikini', 'category_id' => $clothingCategory->id],
            ['name' => 'boots', 'category_id' => $clothingCategory->id],
            ['name' => 'bowtie', 'category_id' => $clothingCategory->id],
            ['name' => 'cap', 'category_id' => $clothingCategory->id],
            ['name' => 'coat', 'category_id' => $clothingCategory->id],
            ['name' => 'dress', 'category_id' => $clothingCategory->id],
            ['name' => 'earmuffs', 'category_id' => $clothingCategory->id],
            ['name' => 'eyepatch', 'category_id' => $clothingCategory->id],
            ['name' => 'glasses', 'category_id' => $clothingCategory->id],
            ['name' => 'gloves', 'category_id' => $clothingCategory->id],
            ['name' => 'hairtie', 'category_id' => $clothingCategory->id],
            ['name' => 'hat', 'category_id' => $clothingCategory->id],
            ['name' => 'headband', 'category_id' => $clothingCategory->id],
            ['name' => 'jacket', 'category_id' => $clothingCategory->id],
            ['name' => 'jeans', 'category_id' => $clothingCategory->id],
            ['name' => 'kneepads', 'category_id' => $clothingCategory->id],
            ['name' => 'mittens', 'category_id' => $clothingCategory->id],
            ['name' => 'necklace', 'category_id' => $clothingCategory->id],
            ['name' => 'overalls', 'category_id' => $clothingCategory->id],
            ['name' => 'pajamas', 'category_id' => $clothingCategory->id],
            ['name' => 'partyhat', 'category_id' => $clothingCategory->id],
            ['name' => 'raincoat', 'category_id' => $clothingCategory->id],
            ['name' => 'sandals', 'category_id' => $clothingCategory->id],
            ['name' => 'scarf', 'category_id' => $clothingCategory->id],
            ['name' => 'shirt', 'category_id' => $clothingCategory->id],
            ['name' => 'shoes', 'category_id' => $clothingCategory->id],
            ['name' => 'skirt', 'category_id' => $clothingCategory->id],
            ['name' => 'slippers', 'category_id' => $clothingCategory->id],
            ['name' => 'sneakers', 'category_id' => $clothingCategory->id],
            ['name' => 'socks', 'category_id' => $clothingCategory->id],
            ['name' => 'sombrero', 'category_id' => $clothingCategory->id],
            ['name' => 'stockings', 'category_id' => $clothingCategory->id],
            ['name' => 'suit', 'category_id' => $clothingCategory->id],
            ['name' => 'sweater', 'category_id' => $clothingCategory->id],
            ['name' => 'sweatshirt', 'category_id' => $clothingCategory->id],
            ['name' => 'swimsuit', 'category_id' => $clothingCategory->id],
            ['name' => 't-shirt', 'category_id' => $clothingCategory->id],
            ['name' => 'tie', 'category_id' => $clothingCategory->id],
            ['name' => 'trousers', 'category_id' => $clothingCategory->id],
            ['name' => 'underpants', 'category_id' => $clothingCategory->id],
        ];
        $familyCategory = Category::firstWhere('name', 'family');
        $familyData = [
            ['name' => 'aunt', 'category_id' => $familyCategory->id],
            ['name' => 'brother', 'category_id' => $familyCategory->id],
            ['name' => 'children', 'category_id' => $familyCategory->id],
            ['name' => 'cousin', 'category_id' => $familyCategory->id],
            ['name' => 'daughter', 'category_id' => $familyCategory->id],
            ['name' => 'father', 'category_id' => $familyCategory->id],
            ['name' => 'granddaughter', 'category_id' => $familyCategory->id],
            ['name' => 'grandma', 'category_id' => $familyCategory->id],
            ['name' => 'grandmother', 'category_id' => $familyCategory->id],
            ['name' => 'grandpa', 'category_id' => $familyCategory->id],
            ['name' => 'grandson', 'category_id' => $familyCategory->id],
            ['name' => 'husband', 'category_id' => $familyCategory->id],
            ['name' => 'mother', 'category_id' => $familyCategory->id],
            ['name' => 'nephew', 'category_id' => $familyCategory->id],
            ['name' => 'niece', 'category_id' => $familyCategory->id],
            ['name' => 'parents', 'category_id' => $familyCategory->id],
            ['name' => 'sister', 'category_id' => $familyCategory->id],
            ['name' => 'son', 'category_id' => $familyCategory->id],
            ['name' => 'stepdaughter', 'category_id' => $familyCategory->id],
            ['name' => 'stepmother', 'category_id' => $familyCategory->id],
            ['name' => 'stepson', 'category_id' => $familyCategory->id],
            ['name' => 'uncle', 'category_id' => $familyCategory->id],
        ];

        $data = array_merge($animalData, $countryData, $locationData, $clothingData, $familyData);
        Word::insert($data);
    }
}
