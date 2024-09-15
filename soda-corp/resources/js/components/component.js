import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Select } from "@/components/ui/select"
import { Trash2 } from "lucide-react"
import { useState } from "react"

export default function Component() {
  const [members, setMembers] = useState([
    { id: 1, name: "" },
    { id: 2, name: "" },
  ])

  const addMember = () => {
    const newId = members.length + 1
    setMembers([...members, { id: newId, name: "" }])
  }

  const removeMember = (id) => {
    setMembers(members.filter(member => member.id !== id))
  }

  return (
    <div className="flex min-h-screen bg-gray-100">
      <aside className="w-64 bg-navy-900 text-white p-6">
        <div className="mb-8">
          <div className="w-12 h-12 bg-red-600"></div>
        </div>
        <nav className="space-y-2">
          <a href="#" className="block py-2 px-4 hover:bg-navy-800 rounded">Tareas Pendientes</a>
          <a href="#" className="block py-2 px-4 hover:bg-navy-800 rounded">Cronograma de actividades</a>
          <a href="#" className="block py-2 px-4 hover:bg-navy-800 rounded">Historial de evaluaciones</a>
          <a href="#" className="block py-2 px-4 hover:bg-navy-800 rounded">Ver grupo</a>
          <a href="#" className="block py-2 px-4 hover:bg-navy-800 rounded">Evaluar</a>
          <a href="#" className="block py-2 px-4 hover:bg-navy-800 rounded">Darme de baja en TIs</a>
        </nav>
        <div className="mt-auto">
          <h2 className="text-xl font-bold mb-4">Bienvenido Estudiante</h2>
          <Button variant="outline" className="w-full">Cerrar Sesión</Button>
        </div>
      </aside>
      <main className="flex-1 p-8">
        <div className="bg-white shadow-md rounded-lg p-6">
          <h1 className="text-2xl font-bold text-red-600 mb-6">REGISTRO DE DATOS DEL GRUPO EMPRESARIAL/EQUIPO</h1>
          <p className="mb-6">Complete el siguiente formulario para registrar la información básica del equipo.</p>
          <form>
            <div className="bg-navy-900 text-white p-6 rounded-lg mb-6">
              <h2 className="text-lg font-semibold mb-4">DATOS GENERALES DEL GRUPO</h2>
              <div className="mb-4">
                <label htmlFor="groupName" className="block mb-2">Nombre del grupo/equipo</label>
                <Input id="groupName" className="w-full" />
              </div>
              <div>
                <label htmlFor="groupLeader" className="block mb-2">Líder de grupo</label>
                <Select>
                  <option>Seleccionar líder</option>
                </Select>
              </div>
            </div>
            <div className="bg-navy-900 text-white p-6 rounded-lg mb-6">
              <h2 className="text-lg font-semibold mb-4">INTEGRANTES DEL GRUPO</h2>
              <table className="w-full">
                <thead>
                  <tr>
                    <th className="text-left">#</th>
                    <th className="text-left">Nombre completo</th>
                    <th className="text-left">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  {members.map((member) => (
                    <tr key={member.id}>
                      <td>{member.id}</td>
                      <td>
                        <Input value={member.name} onChange={(e) => {
                          const updatedMembers = members.map(m => 
                            m.id === member.id ? { ...m, name: e.target.value } : m
                          )
                          setMembers(updatedMembers)
                        }} />
                      </td>
                      <td>
                        <Button variant="ghost" size="icon" onClick={() => removeMember(member.id)}>
                          <Trash2 className="h-4 w-4" />
                        </Button>
                      </td>
                    </tr>
                  ))}
                </tbody>
              </table>
              <Button variant="outline" className="mt-4" onClick={addMember}>
                + Agregar nuevo miembro
              </Button>
            </div>
            <Button className="bg-red-600 hover:bg-red-700 text-white">GUARDAR</Button>
          </form>
        </div>
      </main>
    </div>
  )
}
