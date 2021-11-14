using MoviFaca_Usuario.Vista.Login;
using MoviFaca_Usuario.Vista.Usuario;
using System;
using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace MoviFaca_Usuario
{
    public partial class App : Application
    {
        public App()
        {
            InitializeComponent();
            /*El NavigationPage es para que la App tenga una navegación entre páginas,
            por lo tanto un retroceso o sea se pueda devolver a la pagina anterior*/
            // MainPage = new NavigationPage(new Inicio());
            var navigationPage = new NavigationPage(new PaginaInicio());
            navigationPage.BackgroundColor = Color.Gray;
            navigationPage.BarBackgroundColor = Color.White;
            navigationPage.BarTextColor = Color.Gray;
            MainPage = navigationPage;
        }

        protected override void OnStart()
        {
        }

        protected override void OnSleep()
        {
        }

        protected override void OnResume()
        {
        }
    }
}
