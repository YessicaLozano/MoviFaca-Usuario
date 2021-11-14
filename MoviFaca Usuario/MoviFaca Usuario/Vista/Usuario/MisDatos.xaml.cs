using MoviFaca_Usuario.Cache;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace MoviFaca_Usuario.Vista.Usuario
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class MisDatos : ContentPage
    {
        public MisDatos()
        {
            InitializeComponent();
            NombreTxt.Text = UsuarioCache.nombre;
            CorreoTxt.Text = UsuarioCache.correo;
            ContraseñaTxt.Text = UsuarioCache.contraseña;
        }
    }
}