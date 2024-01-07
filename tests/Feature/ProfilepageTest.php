<?php
Use App\Models\Skill;

test('can displaay profile page', function () {

   $skill =   Skill::create(['skill_name'=>'Android Dev','skill_image'=>'image','skill_link'=>'skill link']);

   expect($skill->skill_name)->toBe('Android Dev');

});

