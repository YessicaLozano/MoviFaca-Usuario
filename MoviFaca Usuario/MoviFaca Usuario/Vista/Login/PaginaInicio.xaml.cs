using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace MoviFaca_Usuario.Vista.Login
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class PaginaInicio : ContentPage
    {
        public PaginaInicio()
        {
            InitializeComponent();
        }
        private async void Registro_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new Registro());
        }
        private async void InSesion_Clicked(object sender, EventArgs e)
        {
            await Navigation.PushAsync(new InicioDeSesion());
        }
    }
}