using System;
using System.Collections.Generic;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace MoviFaca_Usuario.Vista.Login
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class Registro : ContentPage
    {
        public Registro()
        {
            InitializeComponent();
        }

        //En tal caso que la persona tenga una cuenta lo redirige a iniciar sesión 
        private async void InSesion_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new InicioDeSesion());
        }

        private void Registro_Clicked(object sender, EventArgs e)
        {
            //verifica que ninguna de las casillas esté vacia 
            if (CorreoTxt.Text != null)
            {
                if (ContraseñaTxt.Text != null)
                {
                    if (NombreTxt.Text != null)
                    {
                        //creacion de cliente web 
                        WebClient cliente = new WebClient();

                        //creacion de variable para enviar los datos 
                        var parametros = new System.Collections.Specialized.NameValueCollection();

                        parametros.Add("contraseña", ContraseñaTxt.Text);
                        parametros.Add("correo", CorreoTxt.Text);
                        parametros.Add("nombre", NombreTxt.Text);

                        // creacion variable para obtener respuesta del Php
                        byte[] respuest = null;
                        respuest = cliente.UploadValues("http://192.168.1.6/AppBD/insertarDatosUsuario.php", "POST", parametros);
                        // se pasa la variable a string para que pueda ser leida 
                        String respuesta = Encoding.UTF8.GetString(respuest);

                        if (respuesta.Contains("Registro Exitoso"))
                        {
                            Application.Current.MainPage.DisplayAlert(
                             "Hola",
                             "Registro exitoso, Por favor inicie sesión.",
                             "Aceptar");
                            Navigation.PushAsync(new InicioDeSesion());
                        }
                        else
                        {
                            Application.Current.MainPage.DisplayAlert(
                             "Error",
                             "Ya tiene una sesión creada con ese correo, por favor inicie sesión.",
                             "Aceptar");
                            Navigation.PushAsync(new InicioDeSesion());
                        }
                    }
                    else
                    {
                        Application.Current.MainPage.DisplayAlert(
                            "Error",
                            "Por favor ingrese su nombre.",
                            "Aceptar");
                        return;
                    }
                }
                else
                {
                    Application.Current.MainPage.DisplayAlert(
                    "Error",
                    "Por favor ingrese una contraseña.",
                    "Aceptar");
                    return;
                }
            }
            else
            {
                Application.Current.MainPage.DisplayAlert(
                     "Error",
                      "Por favor ingrese un correo electronico valido.",
                      "Accept");
                return;
            }
        }
    }
}