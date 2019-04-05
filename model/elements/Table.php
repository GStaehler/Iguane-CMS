<?php

class Table extends Element
{

    public function integrate(): void
    {
        $element = $this->getElement();
        while ($data = $element->fetch()) {
            echo '<table>
                <thead>
                    <tr>
                        <th>' . $data['head'] . '</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>' . $data['content'] . '</td>
                        <td>' . $data['id'] . '</td>
                        <td>' . $data['type_name'] . '</td>
                    </tr>
                </tbody>
        </table>';
        };
    }
}
