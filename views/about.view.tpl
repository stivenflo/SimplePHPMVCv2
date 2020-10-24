<h1>Ficha de Desarrollo</h1>
<section>
    <h2>{{cuenta}}</h2>
    <h2> {{nombre}}</h2>
    <em>Correo: {{correo}}</em>
</section>
<section>
    <h1>Recorrido Estudiantil</h1>
    <table>
        <tr>
            <td>
                Nivel de estudio
            </td>
            <td>
                Instituto
            </td>
            <td>
                Lugar
            </td>
        </tr>
        {{foreach recorridos}}
        <tr>
            <td>
                {{cursado}}
            </td>
            <td>
                {{escuela}}
            </td>
            <td>
                {{lugar}}
            </td>
        </tr>
        {{endfor recorridos}}
    </table>
</section>