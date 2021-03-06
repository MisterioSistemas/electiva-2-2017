USE [seguridad]
GO
/****** Object:  Table [dbo].[Permisos]    Script Date: 27/09/2017 13:47:49 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Permisos](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombrePermiso] [varchar](200) NOT NULL,
 CONSTRAINT [PK_Permisos] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[PermisosxRol]    Script Date: 27/09/2017 13:47:49 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[PermisosxRol](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[idRol] [int] NOT NULL,
	[idPermiso] [int] NOT NULL,
 CONSTRAINT [PK_PermisosxRol] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[PermisosxUsuario]    Script Date: 27/09/2017 13:47:49 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[PermisosxUsuario](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[idUsuario] [int] NOT NULL,
	[idPermiso] [int] NOT NULL,
 CONSTRAINT [PK_PermisosxUsuario] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Roles]    Script Date: 27/09/2017 13:47:49 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Roles](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombreRol] [varchar](200) NOT NULL,
 CONSTRAINT [PK_Roles] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[RolesxUsuario]    Script Date: 27/09/2017 13:47:49 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[RolesxUsuario](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[idUsuario] [int] NOT NULL,
	[idRol] [int] NOT NULL,
 CONSTRAINT [PK_RolesxUsuario] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
/****** Object:  Table [dbo].[Usuarios]    Script Date: 27/09/2017 13:47:49 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Usuarios](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[username] [varchar](200) NOT NULL,
	[password] [varchar](200) NOT NULL,
 CONSTRAINT [PK_Usuarios] PRIMARY KEY CLUSTERED 
(
	[id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET IDENTITY_INSERT [dbo].[Roles] ON 

INSERT [dbo].[Roles] ([id], [nombreRol]) VALUES (1, N'Administrador')
INSERT [dbo].[Roles] ([id], [nombreRol]) VALUES (2, N'Vendedor')
SET IDENTITY_INSERT [dbo].[Roles] OFF
ALTER TABLE [dbo].[PermisosxRol]  WITH CHECK ADD  CONSTRAINT [FK_PermisosxRol_Permisos] FOREIGN KEY([idPermiso])
REFERENCES [dbo].[Permisos] ([id])
GO
ALTER TABLE [dbo].[PermisosxRol] CHECK CONSTRAINT [FK_PermisosxRol_Permisos]
GO
ALTER TABLE [dbo].[PermisosxRol]  WITH CHECK ADD  CONSTRAINT [FK_PermisosxRol_Roles] FOREIGN KEY([idRol])
REFERENCES [dbo].[Roles] ([id])
GO
ALTER TABLE [dbo].[PermisosxRol] CHECK CONSTRAINT [FK_PermisosxRol_Roles]
GO
ALTER TABLE [dbo].[PermisosxUsuario]  WITH CHECK ADD  CONSTRAINT [FK_PermisosxUsuario_Permisos] FOREIGN KEY([idPermiso])
REFERENCES [dbo].[Permisos] ([id])
GO
ALTER TABLE [dbo].[PermisosxUsuario] CHECK CONSTRAINT [FK_PermisosxUsuario_Permisos]
GO
ALTER TABLE [dbo].[PermisosxUsuario]  WITH CHECK ADD  CONSTRAINT [FK_PermisosxUsuario_Usuarios] FOREIGN KEY([idUsuario])
REFERENCES [dbo].[Usuarios] ([id])
GO
ALTER TABLE [dbo].[PermisosxUsuario] CHECK CONSTRAINT [FK_PermisosxUsuario_Usuarios]
GO
ALTER TABLE [dbo].[RolesxUsuario]  WITH CHECK ADD  CONSTRAINT [FK_RolesxUsuario_Roles] FOREIGN KEY([idRol])
REFERENCES [dbo].[Roles] ([id])
GO
ALTER TABLE [dbo].[RolesxUsuario] CHECK CONSTRAINT [FK_RolesxUsuario_Roles]
GO
ALTER TABLE [dbo].[RolesxUsuario]  WITH CHECK ADD  CONSTRAINT [FK_RolesxUsuario_Usuarios] FOREIGN KEY([idUsuario])
REFERENCES [dbo].[Usuarios] ([id])
GO
ALTER TABLE [dbo].[RolesxUsuario] CHECK CONSTRAINT [FK_RolesxUsuario_Usuarios]
GO
/****** Object:  StoredProcedure [dbo].[sp_Roles_Delete]    Script Date: 27/09/2017 13:47:50 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_Roles_Delete]
(
	@Original_id int
)
AS
	SET NOCOUNT OFF;
DELETE FROM [Roles] WHERE (([id] = @Original_id))
GO
/****** Object:  StoredProcedure [dbo].[sp_Roles_Insert]    Script Date: 27/09/2017 13:47:50 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_Roles_Insert]
(
	@nombreRol varchar(200)
)
AS
	SET NOCOUNT OFF;
INSERT INTO [Roles] ([nombreRol]) VALUES (@nombreRol);
	
SELECT id, nombreRol FROM Roles WHERE (id = SCOPE_IDENTITY())
GO
/****** Object:  StoredProcedure [dbo].[sp_Roles_SelectAll]    Script Date: 27/09/2017 13:47:50 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_Roles_SelectAll]
AS
	SET NOCOUNT ON;
SELECT id, nombreRol
FROM     Roles
GO
/****** Object:  StoredProcedure [dbo].[sp_Roles_SelectById]    Script Date: 27/09/2017 13:47:50 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_Roles_SelectById]
(
	@id int
)
AS
	SET NOCOUNT ON;
SELECT id, nombreRol
FROM     Roles
WHERE  (id = @id)
GO
/****** Object:  StoredProcedure [dbo].[sp_Roles_Update]    Script Date: 27/09/2017 13:47:50 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE PROCEDURE [dbo].[sp_Roles_Update]
(
	@nombreRol varchar(200),
	@Original_id int,
	@id int
)
AS
	SET NOCOUNT OFF;
UPDATE [Roles] SET [nombreRol] = @nombreRol WHERE (([id] = @Original_id));
	
SELECT id, nombreRol FROM Roles WHERE (id = @id)
GO
