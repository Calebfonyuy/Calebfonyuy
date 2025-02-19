<?php

namespace Controllers;

use Http\Response;

class CVController
{
    public function experience()
    {
        $experience = get_experience();
        return new Response(
            200,
            'OK',
            [],
            $experience
        );
    }

    public function projects()
    {
        $projects = get_projects();
        return new Response(
            200,
            'OK',
            [],
            $projects
        );
    }

    public function skills()
    {
        $skills = get_skills();
        return new Response(
            200,
            'OK',
            [],
            $skills
        );
    }

    public function publications()
    {
        $publications = get_publications();
        return new Response(
            200,
            'OK',
            [],
            $publications
        );
    }

    public function teaching()
    {
        $teaching = get_teaching();
        return new Response(
            200,
            'OK',
            [],
            $teaching
        );
    }

    public function presentations()
    {
        $presentations = get_presentations();
        return new Response(
            200,
            'OK',
            [],
            $presentations
        );
    }

    public function service(){
        $service = get_services();

        return new Response(
            200,
            'OK',
            [],
            $service
        );
    }
}