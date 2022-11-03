<?php

namespace Models\MyUser;

use \Models\MyUser;

class Render
{
    public static function render(MyUser\Collection $userCollection): string
    {
        $template = '<table class="users"><tr> <th> id </th> <th> login </th> <th> password</th></tr>';
        foreach ($userCollection->getAll() as $user) {
            $row = <<<ROW_TEMPLATE
            <tr> 
                    <td> $user->id </td> 
                    <td> $user->login </td> 
                    <td> $user->password </td>
                    <td>
                        <img 
                            src="$user->image" 
                            alt="$user->login"
                            width="100"
                            height="100"
                        >
                    </td>
            </tr>
            ROW_TEMPLATE;
            $template .= $row;
        }
        $template .= "</table>";
        return $template;
    }
}