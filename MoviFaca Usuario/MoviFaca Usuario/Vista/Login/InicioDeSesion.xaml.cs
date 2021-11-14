using MoviFaca_Usuario.Cache;
using MoviFaca_Usuario.Vista.Login;
using MoviFaca_Usuario.Vista.Menu;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace MoviFaca_Usuario.Vista
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class InicioDeSesion : ContentPage
    {
        public InicioDeSesion()
        {
            InitializeComponent();
        }
        private async void Registro_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new Registro());
        }

        private void Ingresar_Clicked(object sender, EventArgs e)
        {
            if (CorreoTxt.Text != "Correo")
            {
                if (ContraseñaTxt.Text != "Contraseña")
                {
                    WebClient cliente = new WebClient();
                    UsuarioCache.correo = CorreoTxt.Text;

                    //creacion de variable para enviar los datos 
                    var parametros = new System.Collections.Specialized.NameValueCollection();
                    parametros.Add("correo", UsuarioCache.correo);
                    parametros.Add("contraseña", ContraseñaTxt.Text);
                    // creacion variable para obtener respuesta del Php
                    byte[] respuest = null;
                    respuest = cliente.UploadValues("http://192.168.1.6/AppBD/loginUsuario.php", "POST", parametros);
                    // se pasa la variable a string para que pueda ser leida 
                    String respuesta = Encoding.UTF8.GetString(respuest);
                    if (respuesta.Contains("Ingreso Exitoso"))
                    {
                        respuest = cliente.UploadValues("http://192.168.1.6/AppBD/mostrarDatosUsuario.php", "POST", parametros);
                        // se pasa la variable a string para que pueda ser leida 
                        respuesta = Encoding.UTF8.GetString(respuest);
                        //Dividir cadena 
                        char delimitador = '"';
                        string[] valores = respuesta.Split(delimitador);

                        UsuarioCache.nombre = valores[11];
                        UsuarioCache.contraseña = valores[3];

                        Application.Current.MainPage.DisplayAlert(
                         "Hola",
                         "Inicio de sesión exitoso, bienvenido.",
                         "Aceptar");
                        //Menù es el nuevo Main 
                         Application.Current.MainPage = new MenuUsuario();
                    }
                    else
                    {
                        Application.Current.MainPage.DisplayAlert(
                         "Error",
                         "No hay registro existente o escribió algo mal",
                         "Aceptar");
                        return;
                    }
                }
                else
                {
                    Application.Current.MainPage.DisplayAlert(
                    "Error",
                    "Por favor ingrese su contraseña.",
                    "Aceptar");
                    return;
                }
            }
            else
            {
                Application.Current.MainPage.DisplayAlert(
                     "Error",
                      "Por favor ingrese un correo electronico valido y previamente registrado.",
                      "Accept");
                return;
            }
        }
    }
}