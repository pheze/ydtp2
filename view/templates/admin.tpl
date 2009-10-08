~:extend('base')~
~[content]~
~ if (!$is_logged || !$is_admin) { ~
Vous n'êtes pas administrateur.
~ } else { ~
    Arenas:<br>
    <table>
    
    ~ $counter = 0; ~
       <tr>
          <th>no</th>
          <th>nom</th>
          <th>sieges</th>
          <th>effacer</th>
        </tr>
     ~ foreach ($arenas as $arena) { ~
       <tr>
            <td>~~$counter~</td>
            <td><input type="text" value="~~$arena->nom~" /></td>
            <td><input type="text" size="5" value="~~$arena->sieges~" /></td>
            <td>X</td>
        </tr>

        ~ $counter++; ~
    ~ } ~

      <tr><td /><td /><td /></tr>
      <tr>
           <td></td>
           <form action="index.php" method="get">
           <input type="hidden" name="section" value="admin" />
           <td><input type="text" value="" /></td>
           <td><input type="text" size="5" value="" /></td>
           <td></td>
       </tr>
    </table>

    <input type="submit" value="Enregistrer" />
    </form>
~ } ~
~[/content]~
