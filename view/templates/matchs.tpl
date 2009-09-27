~:extend('base')~
~[content]~
~ if (empty($matchs)) { ~
 Il n'y a aucun match.
~ } else { ~
 <table>

~ $color_counter = 0; ~
~ $colors = array(1234,5678); ~
~ foreach ($matchs as $x) { ~
    <tr>
        <td>
            ~~$colors[$color_counter % 2]~
        </td>
        <td>
            <a href="index.php?section=match_detail&id=~~$x->id~">~~$x->id~</a>
        </td>
    </tr>
    ~$color_counter++;~
~ } ~
 </table>
~ } ~
~[/content]~
