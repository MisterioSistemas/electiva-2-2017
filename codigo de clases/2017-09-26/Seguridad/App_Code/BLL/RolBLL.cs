using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

/// <summary>
/// Summary description for RolBLL
/// </summary>
public class RolBLL
{
    public RolBLL()
    {
    }
    public static List<Rol> SelectAll()
    {
        List<Rol> listaRoles = new List<Rol>();
        RolDSTableAdapters.RolesTableAdapter adapter = new RolDSTableAdapters.RolesTableAdapter();
        RolDS.RolesDataTable table = adapter.SelectAll();
        foreach (RolDS.RolesRow row in table)
        {
            listaRoles.Add(rowToDto(row));
        }
        return listaRoles;
    }

    public static Rol SelectById(int id)
    {

        RolDSTableAdapters.RolesTableAdapter adapter = new RolDSTableAdapters.RolesTableAdapter();
        RolDS.RolesDataTable table = adapter.SelectAll();
        if (table.Rows.Count == 0)
        {
            return null;
        }
        return rowToDto(table[0]);
    }
    public static void insert(string nombreRol)
    {
        RolDSTableAdapters.RolesTableAdapter adapter = new RolDSTableAdapters.RolesTableAdapter();
        adapter.Insert(nombreRol);
    }
    public static void update(string nombreRol, int id)
    {
        RolDSTableAdapters.RolesTableAdapter adapter = new RolDSTableAdapters.RolesTableAdapter();
        adapter.Update(nombreRol, id);
    }
    public static void delete(int id)
    {
        RolDSTableAdapters.RolesTableAdapter adapter = new RolDSTableAdapters.RolesTableAdapter();
        adapter.Delete(id);
    }

    private static Rol rowToDto(RolDS.RolesRow row)
    {
        Rol objRol = new Rol();
        objRol.ID = row.id;
        objRol.NombreRol = row.nombreRol;
        return objRol;
    }
}