const PathNames = [
    {
        path: "/dashboard/instructor/home",
    },
    {
        path: "/dashboard/instructor/create",
    },
    {
        path: "/dashboard/instructor/settings",
    },
    {
        path: "/dashboard/instructor/account",
    },
];

const _handlePath = () => {
    const Path = document.querySelectorAll("#path-holder ul li");

    PathNames.map((p, index) => {
        p.path === location.pathname
            ? (Path[index].className = "mt-2 mb-2 leading-10 active")
            : "";
    });
};

_handlePath();
