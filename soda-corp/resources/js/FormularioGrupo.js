import React, { useState } from 'react';

const FormularioGrupo = () => {
    const [lider, setLider] = useState('');
    const [integrantes, setIntegrantes] = useState([{ nombre: '' }, { nombre: '' }]);

    const handleLiderChange = (e) => {
        setLider(e.target.value);
    };

    const handleIntegranteChange = (index, e) => {
        const nuevosIntegrantes = [...integrantes];
        nuevosIntegrantes[index].nombre = e.target.value;
        setIntegrantes(nuevosIntegrantes);
    };

    const actualizarDatos = () => {
        // Aquí podrías hacer una petición POST al servidor Laravel para actualizar los datos
        console.log({ lider, integrantes });
    };

    return (
        <div className="formulario-grupo">
            <h1>NOMBRE DE LA EMPRESA</h1>

            <div className="lider-de-grupo">
                <label htmlFor="lider">Líder de grupo</label>
                <input
                    type="text"
                    id="lider"
                    value={lider}
                    onChange={handleLiderChange}
                    placeholder="Nombre completo del líder del grupo"
                />
            </div>

            <div className="integrantes">
                <h3>Integrantes del grupo/equipo</h3>
                {integrantes.map((integrante, index) => (
                    <div key={index} className="integrante">
                        <label>{index + 1}</label>
                        <input
                            type="text"
                            value={integrante.nombre}
                            onChange={(e) => handleIntegranteChange(index, e)}
                            placeholder={`Nombre de integrante ${index + 1}`}
                        />
                    </div>
                ))}
            </div>

            <button onClick={actualizarDatos} className="actualizar-datos">
                ACTUALIZAR DATOS
            </button>
        </div>
    );
};

export default FormularioGrupo;
