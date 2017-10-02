<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
    
        <asp:GridView ID="grvRoles" runat="server" AutoGenerateColumns="False" DataSourceID="odsRoles">
            <Columns>
                <asp:BoundField DataField="ID" HeaderText="ID" SortExpression="ID" />
                <asp:BoundField DataField="NombreRol" HeaderText="Nombre" SortExpression="NombreRol" />
            </Columns>
        </asp:GridView>
        <asp:ObjectDataSource ID="odsRoles" runat="server" SelectMethod="SelectAll" TypeName="RolBLL"></asp:ObjectDataSource>
    
    </div>
    </form>
</body>
</html>
