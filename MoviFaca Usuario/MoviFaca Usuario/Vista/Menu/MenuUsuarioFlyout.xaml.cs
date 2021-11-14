using MoviFaca_Usuario.Vista.Usuario;
using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.ComponentModel;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Text;
using System.Threading.Tasks;

using Xamarin.Forms;
using Xamarin.Forms.Xaml;

namespace MoviFaca_Usuario.Vista.Menu
{
    [XamlCompilation(XamlCompilationOptions.Compile)]
    public partial class MenuUsuarioFlyout : ContentPage
    {
        public ListView ListView;

        public MenuUsuarioFlyout()
        {
            InitializeComponent();

            BindingContext = new MenuUsuarioFlyoutViewModel();
            ListView = MenuItemsListView;
        }

        private class MenuUsuarioFlyoutViewModel : INotifyPropertyChanged
        {
            public ObservableCollection<MenuUsuarioFlyoutMenuItem> MenuItems { get; set; }

            public MenuUsuarioFlyoutViewModel()
            {
                MenuItems = new ObservableCollection<MenuUsuarioFlyoutMenuItem>(new[]
                {
                    new MenuUsuarioFlyoutMenuItem { Id = 0, Title = "Mis datos", Icono="perfil.png", TargetType=typeof(MisDatos) },
                    new MenuUsuarioFlyoutMenuItem { Id = 1, Title = "Tarifas", Icono = "tarifa.png", TargetType=typeof(Tarifas) },
                    new MenuUsuarioFlyoutMenuItem { Id = 2, Title = "Rutas", Icono = "ruta.png", TargetType=typeof(Rutas) },
                    new MenuUsuarioFlyoutMenuItem { Id = 3, Title = "Buses cercanos", Icono = "carro.png", TargetType=typeof(BusesCercanos) },
                    new MenuUsuarioFlyoutMenuItem { Id = 4, Title = "Enviar Imprevisto", Icono="reporte.png", TargetType=typeof(EnviarImprevisto) },
                    new MenuUsuarioFlyoutMenuItem { Id = 5, Title = "Ayuda", Icono = "ayuda.png", TargetType=typeof(Ayuda) },
                    new MenuUsuarioFlyoutMenuItem { Id = 6, Title = "Cerrar sesión", Icono="cerrar.png", TargetType=typeof(InicioDeSesion) },
                });
            }

            #region INotifyPropertyChanged Implementation
            public event PropertyChangedEventHandler PropertyChanged;
            void OnPropertyChanged([CallerMemberName] string propertyName = "")
            {
                if (PropertyChanged == null)
                    return;

                PropertyChanged.Invoke(this, new PropertyChangedEventArgs(propertyName));
            }
            #endregion
        }
    }
}